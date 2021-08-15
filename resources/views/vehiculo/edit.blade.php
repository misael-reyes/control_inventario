@extends('layouts.admin')

@section('titulo', 'Editar Vehiculo')

@section('contenido')
<form action="{{ url('/vehiculo/'.$vehiculo->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="marca">Marca</label>
            <input id="marca" class="form-control" type="text" name="marca" value="{{old('marca' , $vehiculo->marca)}}">
            @error('marca')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input id="modelo" class="form-control" type="text" name="modelo" value="{{old('modelo ' , $vehiculo->modelo)}}">
            @error('modelo')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{old('nombre' , $vehiculo->nombre)}}">
            @error('nombre')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
    <a href="{{ url('vehiculo/') }}" class="btn btn-danger">Regresar</a>
</form>
@endsection