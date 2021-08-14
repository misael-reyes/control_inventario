@extends('layouts.admin')

@section('titulo', 'Editar  Proveedor')

@section('contenido')
<form action="{{ url('/proveedor/'.$proveedor->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$proveedor->nombre}}">
            @error('nombre')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="telefono">Telefono</label>
            <input id="telefono" class="form-control" type="text" name="num_telefono" value="{{$proveedor->num_telefono}}">
            @error('telefono')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="e-mail">E-MAIL</label>
            <input type="e-mail" class="form-control" id="e-mail" name="e_mail" value="{{$proveedor->e_mail}}">
            @error('e-mail')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-8">
            <label for="calle">Calle</label>
            <input type="text" class="form-control" id="calle" name="direccion_calle" value="{{$proveedor->direccion_calle}}">
            @error('calle')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="colonia">Colonia</label>
        <input type="text" class="form-control" id="colonia" name="direccion_colonia" value="{{$proveedor->direccion_colonia}}">
        @error('colonia')
        <small>*{{$message}}</small>
        <br>
        @enderror
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="Numero">Numero</label>
            <input id="numero" class="form-control" type="text" name="direccion_numero" value="{{$proveedor->direccion_numero}}">
            @error('numero')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="ciudad">Ciudad</label>
            <input id="ciudad" class="form-control" type="text" name="direccion_ciudad" value="{{$proveedor->direccion_ciudad}}">
            @error('ciudad')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="Estado">Estado</label>
            <input id="Estado" class="form-control" type="text" name="direccion_estado" value="{{$proveedor->direccion_estado}}">
            @error('estado')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="{{ url('proveedor/') }}" class="btn btn-danger">Cancelar</a>
</form>
@endsection