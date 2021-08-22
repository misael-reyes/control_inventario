<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Vehiculos</title>
</head>

<body>
    <h1 style="text-align: center;">Datos de los Vehiculos</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr align="center">
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nombre</th>
            </tr>
        </thead>

        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr align="center">
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->marca }}</td>
                <td>{{ $vehiculo->modelo }}</td>
                <td>{{ $vehiculo->nombre }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>