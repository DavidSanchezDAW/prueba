@extends('layout')
@section('titulo', 'Ofertas')
@section('contenido')
<div class="main">
    @forelse($sales as $sale)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $sale->sale }}</h5>
                <p class="card-text">{{ $sale->company }}</p>
                <p class="card-text">{{ $sale->price }}</p>
                <p class="card-text">{{ $sale->discount }}%</p>
                <p class="card-text">{{ $sale->expires }}</p>
                <p class="card-text">{{ $sale->price - $sale->price*($sale->discount/100) }}€</p>

                <a href="#" class="btn btn-primary">Ver</a>
            </div>
        </div>
    @empty
        <p>No hay ofertas</p>
    @endforelse
</div>
@endsection

