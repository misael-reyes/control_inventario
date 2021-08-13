@extends('layouts.admin')

@section('titulo', 'Marca')

@section('contenido')

<form action="{{url('marca')}}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName4">Nombre de la marca</label>
            <input type="text" class="form-control" id="inputName4" name="nombre_marca" placeholder="Nombre de la marca">
            @error('nombre_marca')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-lg">Registrar</button>
</form>

@endsection