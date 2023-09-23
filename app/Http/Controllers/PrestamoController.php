<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrestamoRequest;
use App\Http\Requests\UpdatePrestamoRequest;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::with('user:id,name', 'libro:id,titulo')
            ->orderBy("id", "desc")
            ->filterByUser()
            ->get();
        return view('prestamos.index', compact('prestamos'));
    }

    public function createprestamo($libro_id)
    {
        $libro = Libro::find($libro_id);
        $users = User::orderBy('id', 'desc')->get();
        $libros = Libro::where('disponible', 1)
            ->orderBy('id', 'desc')
            ->get();
        return view('prestamos.create', compact('libro', 'users', 'libros'));
    }

    public function statusPrestamo($prestamo_id)
    {
        $prestamo = Prestamo::find($prestamo_id);
        $prestamo->status = 1;
        $prestamo->libro()->update(['disponible' => 1]);
        $prestamo->update();
        return redirect()->route('prestamos.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $users = User::orderBy('id', 'desc')->get();
        $libros = Libro::where('disponible', 1)
            ->orderBy('id', 'desc')
            ->get();
        return view('prestamos.create', compact('users', 'libros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrestamoRequest $request)
    {
        $prestamo = new Prestamo();
        $prestamo->user_id = $request->user_id;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->status = 0;
        $prestamo->save();
        $prestamo->libro()->update(['disponible' => 0]);
        return redirect()->route('prestamos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prestamo $prestamo)
    {
        return view('prestamos.show', compact('prestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        return view('prestamos.edit', compact('prestamo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrestamoRequest $request, Prestamo $prestamo)
    {
        $prestamo->user_id = $request->user_id;
        $prestamo->libro_id = $request->libro_id;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->fecha_devolucion = $request->fecha_devolucion;
        $prestamo->status = $request->status;
        $prestamo->update();
        return redirect()->route('prestamos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();
        return redirect()->route('prestamos.index');
    }
}
