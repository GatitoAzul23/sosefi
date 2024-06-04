@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <h2>Modificar proveedor</h2>
        <hr>
    </div>
    <div class="row">
        <form action="{{ route('proveedores.update', $proveedor->id) }}" method="post" enctype="multipart/form-data" class="col-lg-7">
            @csrf <!-- Protección contra ataques ya implementado en laravel  https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/-->
            @method('PUT')
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$proveedor->nombre}}" />
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$proveedor->telefono}}" />
            </div>
            <div class="form-group">
                <label for="correo">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$proveedor->email}}" />
            </div>
            <button type="submit" class="btn btn-success">Guardar Proveedor</button>
        </form>
    </div>
</div>
@endsection
