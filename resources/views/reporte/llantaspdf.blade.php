<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Llantas</title>
</head>

<body>
    <h1 style="text-align: center;">Datos de las Llantas</h1>
    <table class="table table-light" style="width: 100%;">
        <thead class="thead-light">
            <tr align="center">
                <th>ID</th>
                <th>Medida</th>
                <th>MSPN</th>
                <th>Gama</th>
                <th>Descripción</th>
                <th>IC/RV</th>
                <th>Tecnología</th>
                <th>Marcaje OE</th>
                <th>Vehículo con equipo original</th>
                <th>Precio de venta</th>
                <th>Precio de compra</th>
                <th>Descuento</th>
                <th>Stock</th>
                <th>Activo</th>
                <th>ID Vehículo</th>
                <th>ID Marca</th>
                <th>ID Proveedor</th>
            </tr>
        </thead>

        <tbody>
            @foreach($llantas as $llanta)
            <tr align="center">
                <td>{{ $llanta->id }}</td>
                <td>{{ $llanta->medida }}</td>
                <td>{{ $llanta->mspn }}</td>
                <td>{{ $llanta->gama }}</td>
                <td>{{ $llanta->descripción }}</td>
                <td>{{ $llanta->ic_rv }}</td>
                <td>{{ $llanta->tecnologia }}</td>
                <td>{{ $llanta->marcaje_oe }}</td>
                <td>{{ $llanta->vehiculo_equi_orig }}</td>
                <td>{{ $llanta->precio_v }}</td>
                <td>{{ $llanta->precio_c }}</td>
                <td>{{ $llanta->descuento }}</td>
                <td>{{ $llanta->stock }}</td>
                <td>{{ $llanta->activo }}</td>
                <td>{{ $llanta->vehiculo_id }}</td>
                <td>{{ $llanta->marca_id }}</td>
                <td>{{ $llanta->proveedor_id }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>