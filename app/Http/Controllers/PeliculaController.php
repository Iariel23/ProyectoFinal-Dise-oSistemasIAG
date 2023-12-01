<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }

    public function create()
    {
        return view('peliculas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'genero' => 'required',
            'anio' => 'required|integer',
        ]);

        Pelicula::create($request->all());

        return redirect()->route('peliculas.index')->with('success', 'Película creada correctamente');
    }

    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }

    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $generos = ['Terror', 'Drama', 'Acción', 'Comedia', 'Ciencia Ficción', 'Animación'];
        return view('peliculas.edit', compact('pelicula', 'generos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'genero' => 'required',
            'anio' => 'required|integer',
        ]);

        $pelicula = Pelicula::findOrFail($id);
        $pelicula->update($request->all());

        return redirect()->route('peliculas.index')->with('success', 'Película actualizada correctamente');
    }

    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();

        return redirect()->route('peliculas.index')->with('success', 'Película eliminada correctamente');
    }
}
