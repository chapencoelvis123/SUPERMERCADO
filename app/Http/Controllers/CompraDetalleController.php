<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Compra;
use App\Models\CompraDetalle;
use Illuminate\Http\Request;

class CompraDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradetalles = Compradetalle::all();
        $compras = Compra::all();
        $productos = Producto::all();

        return view('detallecompra.index', compact(['compradetalles', 'compras','productos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compras = Compra::all();
        $productos = Producto::all();
        return view('detallecompra.create', compact(['compras','productos']));
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
            'cantidad' => 'required', 
            'precio_total' => 'required', 
            'compra_id' => 'required',
            'producto_id' => 'required'
        ]);
        Producto::create($fields);
        $compradetalles = CompraDetalle::all();
        $compras = Compra::all();
        $productos = Producto::all();
        return view('compradetalles.index', compact(['compradetalles', 'compras','productos']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(CompraDetalle $compraDetalle)
    {
        return view('compradetalles.show', compact('compradetalle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(CompraDetalle $compraDetalle)
    {
        $compras = Compra::all();
        $productos= Producto::all();
        return view('compradetalle.edit', compact(['compradetalle','compra','producto']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CompraDetalle $compraDetalle)
    {
        $fields = $request->validate([
            'cantidad' => 'required', 
            'precio_total' => 'required', 
            'compra_id' => 'required',
            'producto_id' => 'required'
        ]);
        $compraDetalle->update($fields);

        $compradetalles = CompraDetalle::all();
        $compras = Compra::all();
        $productos = Producto::all();

        return view('compradetalles.index', compact(['compradetalles', 'compras','productos']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompraDetalle  $compraDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompraDetalle $compraDetalle)
    {
        $compraDetalle->delete();

        $compradetalles = CompraDetalle::all();
        $compras = Compra::all();
        $productos = Producto::all();
        return redirect()->route('compradetalle.index', compact(['compradetalle', 'compras','productos']))->with('status', 'Producto eliminado');
    }
}
