<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();

        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
            'telefono' => 'required|integer'
        ]);
        
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->ubicacion = $request->ubicacion;
        $empresa->telefono = $request->telefono;
        $empresa->save();

        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
        //return redirect()->route('empresa.show', $empresa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //$empresa = Empresa::find($empresa->id);
        return view('empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('empresas.edit', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $fields = $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
            'telefono' => 'required|integer'
        ]);
        $empresa->update($fields);

        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();

        $empresas = Empresa::all();
        return redirect()->route('empresa.index', $empresas);
    }
}
