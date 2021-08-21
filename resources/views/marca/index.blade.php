@extends('layouts.admin')

@section('titulo', 'Marca')

@section('contenido')
<a href="{{ url('/marca/create') }}" class="btn btn-success btn-lg">Nueva marca</a>
<br>
<br>
<div class="table-responsive">
    <table class="table table-light">

        <thead class="thead-dark">
            <tr align="center">
                <th> ID </th>
                <th> Nombre </th>
                <th> Acciones </th>
            </tr>
        </thead>

        <tbody>
            @foreach($datos as $d)
            <tr align="center">
                <td>{{ $d->id }}</td>
                <td> {{  $d->nombre_marca }} </td>
                <td>
                    <a href="{{ url('/marca/'.$d->id.'/edit') }}" class="btn btn-primary">
                        Editar
                    </a>
                    |
                    <form action="{{ url('/marca/'.$d->id) }}" class="d-inline" method="post">
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