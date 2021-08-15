@extends('layouts.admin')

@section('titulo', 'Agregar Vehiculo')

@section('contenido')
<form action="{{ url('/vehiculo') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="marca">Marca</label>
            <input id="marca" class="form-control" type="text" name="marca" placeholder="Ingresa la marca" value="{{old('marca')}}">
            @error('marca')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input id="modelo" class="form-control" type="text" name="modelo" placeholder="Ingresa el modelo" value="{{old('modelo')}}">
            @error('modelo')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Ingresa el nombre" value="{{old('nombre')}}">
            @error('nombre')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar datos</button>
    <a href="{{ url('vehiculo/') }}" class="btn btn-danger">Regresar</a>
</form>
@endsection
