<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $categorias = Categoria::all();

        return view('categorias', ['categorias' => $categorias]);
    }

    public function showCategorias(){
        $categorias = Categoria::all();

        return view('tablaCategorias', ['categorias' => $categorias]);
    }

    public function showProductos(Request $request, int $id)
    {
        //
        $categoria = Categoria::find($id);

        $productos = Producto::where('categoria_id', $categoria->id)->get();

        return view('productos', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Categoria::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'created_at' => now(),
            'updated_at' => now()
        ])->save();

        return redirect('/categoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria, Request $request, int $id)
    {
        //

        $categoria = Categoria::find($id);

        return view('showCategoria', ['categoria' => $categoria]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        //
        
        $categoria = Categoria::find($request->input('id'));
        $categoria->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'updated_at' => now()
        ]);
        return redirect('/tablaCategoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria, Request $request)
    {
        //
        $categoria = Categoria::find($request->input('id'));
        $categoria->delete();
        return redirect('/tabla.eliminar');
    }
}
