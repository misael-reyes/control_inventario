<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Marcas</title>
</head>

<body>
    <h1 style="text-align: center;">Datos de las Marcas</h1>
    <table class="table table-light">
        <thead class="thead-light">
            <tr align="center">
                <th>ID</th>
                <th>Nombre de la marca</th>
            </tr>
        </thead>

        <tbody>
            @foreach($marcas as $marca)
            <tr align="center">
                <td>{{ $marca->id }}</td>
                <td>{{ $marca->nombre_marca }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>