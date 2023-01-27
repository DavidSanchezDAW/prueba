<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{


    public function listar10Primos(){
        $primos = [];
        $i = 0;
        while(count($primos) < 10){
            if(OperacionesController::esPrimo($i)) $primos[] = $i;
            $i++;
        }
    }
    public function listarPrimos($num){
        $primos = [];
        $i = 0;
        while(count($primos) < $num){
            if(OperacionesController::esPrimo($i)) $primos[] = $i;
            $i++;
        }
        return view('primos', compact('primos'));
    }

    public function factorial($num){
        $factorial = 1;
        for($i = 1; $i <= $num; $i++){
            $factorial *= $i;
        }
        return view('factorial', compact('factorial'), compact('num'));
    }

    private function esPrimo($i){
        $cont = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $cont++;
            }
        }
        return $cont == 2;
    }

}
