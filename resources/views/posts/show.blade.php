@extends('layout')
@section('titulo', 'Inicio - David Sanchez')
@section('contenido')
     <div class="card">
        <div class="card-body">
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
            <a href={{route('posts.edit', $post->id)}}>Editar</a>
            <form action={{route('posts.destroy', $post->id)}} method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Borrar" class="borrar-post">
            </form>
        </div>
     </div>
@endsection
