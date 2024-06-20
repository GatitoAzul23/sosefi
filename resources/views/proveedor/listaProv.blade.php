<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de proveedores</title>
</head>
<body>
    <h1>Lista de proveedores</h1>
    {{-- <h3>Ultima actualización hecha en: {{$proveedor->updated_at}}</h3> --}}
    <table class="table-primary">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>    
        </thead>
        <tbody>
            @foreach($proveedor as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->nombre}}</td>
                    <td>{{$pro->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>