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
        $vs_proveedores = Proveedor::where('estado', '=', "Activo")
        //lo de abajo es para los join
        //->join('users', 'users.id', '=', 'proveedor.user_id')
        //->select('users.name', 'users.email', 'videos.*')
        ->get();
        $proveedores = $this->cargarDT($vs_proveedores);
        return view('proveedor.index')->with('proveedores', $proveedores);
    }

    public function cargarDT($consulta)
   {
       $proveedores = [];
       foreach ($consulta as $key => $value) {
           $ruta = "eliminar" . $value['id'];
           $eliminar = "#";//route('delete-proveedor', $value['id']);
           $actualizar = route('proveedores.edit', $value['id']);
           $acciones = '
          <div class="btn-acciones">
              <div class="btn-circle">
                  <a href="' . $actualizar . '" role="button" class="btn btn-success" title="Actualizar">
                      <i class="far fa-edit"></i>
                  </a>
                   <a role="button" class="btn btn-danger" onclick="modal('.$value['id'].')" data-bs-toggle="modal" data-bs-target="#exampleModal"">
                      <i class="far fa-trash-alt"></i>
                  </a>
              </div>
          </div>
';


           $proveedores[$key] = array(
               
               $value['id'],
               $value['nombre'],
               $value['email'],
               $value['telefono'],
               $acciones
           );
       }




       return $proveedores;
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

    public function deleteProveedor($proveedor_id){
        $proveedor = Proveedor::find($proveedor_id);
        if($proveedor){
            $proveedor->estatus ="Inactivo";
            $proveedor->update();
            return redirect()->route('proveedor.index')->with(
                array(
                    "message" => "El proveedor se ha eliminado correctamente"
                )
                );
        }
        else{
            return redirect()->route('proveedor.index')->with(
                array(
                    "message" => "El proveedor que intentado eliminar no existe"
                )
                );  
        }
    }

}
