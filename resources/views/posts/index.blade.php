@extends('layout')
@section('titulo', 'Inicio - David Sanchez')
@section('contenido')
<h1>Listado posts</h1>
@if(request()->get('borrado'))
<h3 style="color:green">Post borrado correctamente</h3>
@endif
@forelse($posts as $post)
<a href={{route('posts.show', ['post' => $post['id']])}} class="post">
    <div class="card post">
        <div class="card-body">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>
</a>
@empty
    <p>No hay posts</p>
@endforelse
<div class="paginador">
{{$posts->links()}}
</div>
@endsection
