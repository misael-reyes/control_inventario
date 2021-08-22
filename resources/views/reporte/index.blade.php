@extends('layouts.admin')

@section('titulo', 'REPORTES DEL SISTEMA')

@section('contenido')
<br>
<br>
<table class="table table-light mx-auto" style="width: 50%;">
    <thead class="thead-light">
        <tr align="center">
            <th>Número</th>
            <th>Nombre de la tabla</th>
            <th>Descarga PDF</th>
            <th>Descarga Excel</th>
        </tr>
    </thead>

    <tbody>
        <tr align="center">
            <td>1</td>
            <td>Marcas</td>
            <td>
                <a href="{{ url('/reportes/marcas') }}" class="btn btn-danger">PDF</a>
            </td>
            <td>
                <a href="{{ url('/reportes/excel/marcas') }}" class="btn btn-success">Excel</a>
            </td>
        </tr>
        <tr align="center">
            <td>2</td>
            <td>Vehiculos</td>
            <td>
                <a href="{{ url('/reportes/vehiculos') }}" class="btn btn-danger">PDF</a>
            </td>
            <td>
                <a href="{{ url('/reportes/excel/vehiculos') }}" class="btn btn-success">Excel</a>
            </td>
        </tr>
        <tr align="center">
            <td>3</td>
            <td>Proveedores</td>
            <td>
                <a href="{{ url('/reportes/proveedores') }}" class="btn btn-danger">PDF</a>
            </td>
            <td>
                <a href="{{ url('/reportes/excel/proveedores') }}" class="btn btn-success">Excel</a>
            </td>
        </tr>
        <tr align="center">
            <td>4</td>
            <td>Llantas</td>
            <td>
                <a href="{{ url('/reportes/llantas') }}" class="btn btn-danger">PDF</a>
            </td>
            <td>
                <a href="{{ url('/reportes/excel/llantas') }}" class="btn btn-success">Excel</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection