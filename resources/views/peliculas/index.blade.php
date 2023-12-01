<div>
<!-- resources/views/peliculas/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Listado de Películas</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('peliculas.create') }}" class="btn btn-primary">Agregar Película</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Género</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->id }}</td>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->genero }}</td>
                    <td>{{ $pelicula->anio }}</td>
                    <td>
                        <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar la película?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

@endsection
</div>
