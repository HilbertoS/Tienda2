<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $producto = Producto::all();

        return view('productos', ['productos' => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        
        return view('productoCrear', ['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Producto::create(([
            'nombre' => $request->input('nombre'),
            'categoria_id' => $request->input('categoria_id'),
            'precio' => $request->input('precio'),
            'imagen' => $request->input('imagen'),
            'descripcion' => $request->input('descripcion'),
            'estado' => $request->input('estado'),
        ]))->save();

        return redirect('/producto.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
