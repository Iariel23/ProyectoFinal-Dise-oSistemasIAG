@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Peliculas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Haz iniciado sesión!') }}

                    <!-- Agrega un botón para ir a la página de películas -->
                    <a href="{{ route('peliculas.index') }}" class="btn btn-primary">Ir a Películas</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vincular los estilos generados con Laravel Mix -->
<link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">

@endsection
