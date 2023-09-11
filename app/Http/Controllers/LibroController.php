<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use Illuminate\Support\Facades\Redirect;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::orderBy("id", "desc")->buscar(request()->buscar)->get();

        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create');
    }

    public function entregar($libro_id)
    {
        $libro = Libro::find($libro_id);
        $libro->prestamos()->update(['status' => 1]);
        $libro->disponible = 1;
        $libro->update();
        return redirect()->route('libros.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLibroRequest $request)
    {
        $libro = new Libro();
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->ano_publicacion = $request->ano_publicacion;
        $libro->descripcion = $request->descripcion;
        $libro->genero = $request->genero;
        $libro->disponible = $request->disponible;

        $libro->save();
        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLibroRequest $request, Libro $libro)
    {
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->ano_publicacion = $request->ano_publicacion;
        $libro->descripcion = $request->descripcion;
        $libro->genero = $request->genero;
        $libro->disponible = $request->disponible;

        $libro->update();
        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
