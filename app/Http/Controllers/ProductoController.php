<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda el registro capturado en un formulario de alta
        $this->validate($request,[
            'nombre'=>'required|min:5',
            'categoria'=>'required|min:10',
            'cantidad'=>'required',
            'marca'=>'required',
            'precio'=>'required',
            'id_proveedor'=>'required'
        ]);
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->categoria= $request->input('categoria');
        $producto->cantidad= $request->input('cantidad');
        $producto->marca=$request->input('marca');
        $producto->estado= 'Activo';
        $producto->save();
        return redirect()->route('producto.index')->with(array(
            'message'=>'El proveedor se ha guardado correctamente'
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
