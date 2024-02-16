@extends('plantilla')
@section('titulo', 'Listado Posts')
@section('contenido')


<div class="container mt-4">
    <h1>Ficha {{$post->id}}</h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Titulo: {{$post->titulo}}</h2>
                    <h3 class="card-subtitle mb-2 text-muted">Contenido: {{$post->contenido}}</h3>
                    <h3 class="card-subtitle mb-2 text-muted">Fecha de creacion: {{$post->created_at}}</h3>
                   

                </div>
            </div>
        

</div>
@endsection
