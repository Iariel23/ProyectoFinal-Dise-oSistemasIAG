<div>
<!-- resources/views/peliculas/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Detalles de la Película</h2>

    <div>
        <strong>Título:</strong> {{ $pelicula->titulo }}
    </div>
    <div>
        <strong>Genero:</strong> {{ $pelicula->genero }}
    </div>
    <div>
        <strong>Año:</strong> {{ $pelicula->anio }}
    </div>
    <br>
    <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Volver al Listado</a>

    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

@endsection
</div>
