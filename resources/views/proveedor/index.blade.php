@extends('layouts.admin')

@section('titulo', 'PROVEEDORES')

@section('contenido')

<a href="{{ url('/proveedor/create') }}" class="btn btn-success btn-lg"> Registrar Proveedor</a>
<br>
<br>

<div class="table-responsive">
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>E-mail</th>
                <th>Calle</th>
                <th>colonia</th>
                <th>Numero</th>
                <th>Ciudad</th>
                <th>Estado</th>
                
            </tr>
        </thead>

        <tbody>
            @foreach($datos as $dato)<!--DUDAS -->
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->nombre }}</td>
                <td>{{ $dato->num_telefono }}</td>
                <td>{{ $dato->e_mail }}</td>
                <td>{{ $dato->direccion_calle }}</td>
                <td>{{ $dato->direccion_colonia }}</td>
                <td>{{ $dato->direccion_numero }}</td>
                <td>{{ $dato->direccion_ciudad }}</td>
                <td>{{ $dato->direccion_estado }}</td>
                <td>
                    <a href="{{ url('/proveedor/'.$dato->id.'/edit') }}" class="btn btn-primary"><!--DUDAS -->
                        Editar
                    </a>

                    <form action="{{ url('/proveedor/'.$dato->id) }}" class="d-inline" method="post"><!--DUDAS -->
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar"><!--DUDAS -->
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection