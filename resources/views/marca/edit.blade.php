@extends('layouts.admin')

@section('titulo', 'Marca')

@section('contenido')

<form action="{{url('/marca/'.$marca->id)}}" method="POST">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputName4">Nombre de la marca</label>
            <input type="text" class="form-control" id="inputName4" name="nombre_marca" value="{{ $marca->nombre_marca }}">
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-lg">Actualizar</button>
</form>

@endsection