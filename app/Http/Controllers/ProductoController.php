<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('productos.index', compact(['productos', 'categorias']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $fields = $request->validate([
            'nombre' => 'required', 
            'precio' => 'required', 
            'categoria_id' => 'required'
        ]);
        Producto::create($fields);
        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('productos.index', compact(['productos', 'categorias']));
       
        //return redirect()->route('producto.show', $producto);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact(['producto','categorias']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $fields = $request->validate([
            'nombre' => 'required', 
            'precio' => 'required', 
            'categoria_id' => 'required'
        ]);
        $producto->update($fields);

        $productos = Producto::all();
        $categorias = Categoria::all();

        return view('productos.index', compact(['productos', 'categorias']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        $productos = Producto::all();
        $categorias = Categoria::all();

        return redirect()->route('producto.index', compact(['productos', 'categorias']))->with('status', 'Producto eliminado');
    }
}
