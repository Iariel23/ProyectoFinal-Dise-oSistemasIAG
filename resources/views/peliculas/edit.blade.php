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
            <label for="genero">Género:</label>
            <select name="genero" class="form-control" required>
                <option value="Terror" {{ $pelicula->genero === 'Terror' ? 'selected' : '' }}>Terror</option>
                <option value="Drama" {{ $pelicula->genero === 'Drama' ? 'selected' : '' }}>Drama</option>
                <option value="Acción" {{ $pelicula->genero === 'Acción' ? 'selected' : '' }}>Acción</option>
                <option value="Comedia" {{ $pelicula->genero === 'Comedia' ? 'selected' : '' }}>Comedia</option>
                <option value="Ciencia Ficción" {{ $pelicula->genero === 'Ciencia Ficción' ? 'selected' : '' }}>Ciencia Ficción</option>
                <option value="Animación" {{ $pelicula->genero === 'Animación' ? 'selected' : '' }}>Animación</option>
            </select>
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
