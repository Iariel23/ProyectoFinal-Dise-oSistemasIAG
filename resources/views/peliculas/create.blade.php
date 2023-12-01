<div>
<!-- resources/views/peliculas/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Agregar Película</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('peliculas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genero">Género:</label>
            <select name="genero" class="form-control" required>
                <option value="Terror">Terror</option>
                <option value="Drama">Drama</option>
                <option value="Acción">Acción</option>
                <option value="Comedia">Comedia</option>
                <option value="Ciencia Ficción">Ciencia Ficción</option>
                <option value="Animación">Animación</option>
            </select>
        </div>
        <div class="form-group">
            <label for="anio">Año:</label>
            <input type="number" name="anio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Película</button>
    </form>

    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

@endsection
</div>
