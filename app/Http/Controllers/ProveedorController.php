<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Mandar a llamar el modelo
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostrar todos los registros de la tabla
        return view('proveedor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Abrir un formulario para capturar un nuevo registro
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Guarda el registro capturado en un formulario de alta
        $this->validate($request,[
            'nombre'=>'required|min:5',
            'telefono'=>'required|min:10',
            'email'=>'required|min:7'
        ]);
        $proveedor = new Proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->telefono= $request->input('telefono');
        $proveedor->email= $request->input('email');
        $proveedor->estado= 'Activo';
        $proveedor->save();
        return redirect()->route('proveedores.index')->with(array(
            'message'=>'El proveedor se ha guardado correctamente'
        ));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Muestra un registro en especifico
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Abre el formulario para editar un registro 
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedor.edit', array(
            'proveedor'=>$proveedor
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Guarda la información/registro modificado
        $this->validate($request, [
            'nombre' => 'required|min:5',
            'telefono' => 'required',
            'email' => 'required'
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $proveedor->nombre =  $request->input('nombre');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->email = $request->input('email');
        $proveedor->save();
        return redirect()->route('proveedores.index')->with(array(
            'message'=>'El proveedor se ha modificado correctamente'
        ));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Borra un registro
    }
}
