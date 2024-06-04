@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row">
        <h2>Crear un nuevo proveedor</h2>
        <hr>
    </div>
    <div class="row">
        <form action="{{ route('proveedores.store') }}" method="post" enctype="multipart/form-data" class="col-lg-7">
            @csrf <!-- Protección contra ataques ya implementado en laravel  https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/-->
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
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" />
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" />
            </div>
            <div class="form-group">
                <label for="correo">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" />
            </div>
            <button type="submit" class="btn btn-success">Guardar Proveedor</button>
        </form>
    </div>
</div>
@endsection
