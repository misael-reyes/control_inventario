@extends('layouts.admin')

@section('titulo', 'Vehiculos')

@section('contenido')
<a href="{{ url('/vehiculo/create') }}" class="btn btn-success btn-lg"> Agregar Nuevo</a>
<br>
<br>

<div class="table-responsive">
    <table class="table table-light">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->marca }}</td>
                <td>{{ $dato->modelo }}</td>
                <td>{{ $dato->nombre }}</td>
                <td>
                    <a href="{{ url('/vehiculo/'.$dato->id.'/edit') }}" class="btn btn-primary">
                        Editar
                    </a>

                    <form action="{{ url('/vehiculo/'.$dato->id) }}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
{!!$datos->render()!!}
@endsection

