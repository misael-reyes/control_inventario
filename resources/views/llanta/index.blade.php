@extends('layouts.admin')

@section('titulo', 'Llantas')

@section('contenido')

<a href="{{ url('/llanta/create') }}" class="btn btn-success btn-lg"> Registrar nueva Llanta</a>
<br>
<br>

<div class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Medida</th>
                <th>ID Marca</th>
                <th>MSPN</th>
                <th>Gama</th>
                <th>Descripción</th>
                <th>IC/RV</th>
                <th>Tecnología</th>
                <th>Marcaje OE</th>
                <th>Vehiculo con equipo original</th>
                <th>ID Vehiculo</th>
                <th>Precio de venta</th>
                <th>Precio de compra</th>
                <th>Descuento</th>
                <th>ID Proveedor</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->medida }}</td>
                <td>{{ $dato->marca_id }}</td>
                <td>{{ $dato->mspn }}</td>
                <td>{{ $dato->gama }}</td>
                <td>{{ $dato->descripcion }}</td>
                <td>{{ $dato->ic_rv }}</td>
                <td>{{ $dato->tecnologia }}</td>
                <td>{{ $dato->marcaje_oe }}</td>
                <td>{{ $dato->vehiculo_equi_orig }}</td>
                <td>{{ $dato->vehiculo_id }}</td>
                <td>{{ $dato->precio_v }}</td>
                <td>{{ $dato->precio_c }}</td>
                <td>{{ $dato->descuento }}</td>
                <td>{{ $dato->proveedor_id }}</td>
                <td>{{ $dato->stock }}</td>
                <td>
                    <a href="{{ url('/llanta/'.$dato->id.'/edit') }}" class="btn btn-primary">
                        Editar
                    </a>

                    <form action="{{ url('/llanta/'.$dato->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres dar de baja este registro?')" value="Baja">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection