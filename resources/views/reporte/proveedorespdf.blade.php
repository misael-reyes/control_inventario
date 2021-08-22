<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Proveedores</title>
</head>

<body>
    <h1 style="text-align: center;">Datos de los Proveedores</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr align="center">
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Calle</th>
                <th>Colonia</th>
                <th>Número</th>
                <th>Ciudad</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($proveedores as $proveedor)
            <tr align="center">
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->num_telefono }}</td>
                <td>{{ $proveedor->e_mail }}</td>
                <td>{{ $proveedor->direccion_calle }}</td>
                <td>{{ $proveedor->direccion_colonia }}</td>
                <td>{{ $proveedor->direccion_numero }}</td>
                <td>{{ $proveedor->direccion_ciudad }}</td>
                <td>{{ $proveedor->direccion_estado }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>