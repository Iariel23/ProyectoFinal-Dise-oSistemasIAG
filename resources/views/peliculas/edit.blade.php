<div>
<!-- resources/views/peliculas/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Editar Película</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peliculas.update', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" value="{{ $pelicula->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="genero">Genero:</label>
            <textarea name="genero" class="form-control" required>{{ $pelicula->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="number" name="anio" class="form-control" value="{{ $pelicula->anio }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Película</button>
    </form>

    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

@endsection
</div>
