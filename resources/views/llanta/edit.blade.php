@extends('layouts.admin')

@section('titulo', 'Editar llanta')

@section('contenido')
<form action="{{ url('/llanta/'.$llanta->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="medida">Medida</label>
            <input id="medida" class="form-control" type="text" name="medida" value="{{ old('medida', $llanta->medida) }}">
            @error('medida')
            <small>*{{$message}}</small>
            <br>
            @enderror        
        </div>
        <div class="form-group col-md-4">
            <label for="marca">Marca</label>
            <select name="marca_id" id="marca_id" class="form-control">
                <option disabled selected value="">Elige una marca</option>
                @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre_marca }}</option>
                @endforeach
            </select>
            @error('marca_id')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="proveedor_id">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control">
                <option disabled selected value="">Elige un proveedor</option>
                @foreach($proveedores as $proveedor)
                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                @endforeach
            </select>
            @error('proveedor_id')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="mspn">MSPN</label>
            <input type="number" class="form-control" id="mspn" name="mspn" value="{{ old('mspn', $llanta->mspn) }}">
            @error('mspn')
            <small>*{{$message}}</small>
            <br>
            @enderror        
        </div>
        <div class="form-group col-md-8">
            <label for="gama">Gama</label>
            <input type="text" class="form-control" id="gama" name="gama" value="{{ old('gama', $llanta->gama) }}">
            @error('gama')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $llanta->descripcion) }}">
        @error('descripcion')
        <small>*{{$message}}</small>
        <br>
        @enderror    
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="ic_rv">IC/RV</label>
            <input id="ic_rv" class="form-control" type="text" name="ic_rv" value="{{ old('ic_rv', $llanta->ic_rv) }}">
            @error('ic_rv')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="tecnologia">Tecnología</label>
            <input id="tecnologia" class="form-control" type="text" name="tecnologia" value="{{ old('tecnologia', $llanta->tecnologia) }}">
            @error('tecnologia')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-4">
            <label for="marcaje_oe">Marcaje OE</label>
            <input id="marcaje_oe" class="form-control" type="text" name="marcaje_oe" value="{{ old('marcaje_oe', $llanta->marcaje_oe) }}">
            @error('marcaje_oe')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="vehiculo_equi_orig">Vehiculo con equipo original Michelin</label>
            <input id="vehiculo_equi_orig" class="form-control" type="text" name="vehiculo_equi_orig" value="{{ old('vehiculo_equi_orig', $llanta->vehiculo_equi_orig) }}">
            @error('vehiculo_equi_orig')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-6">
            <label for="vehiculo_id">Principales aplicaciones (Vehiculo)</label>
            <select name="vehiculo_id" id="vehiculo_id" class="form-control">
                <option disabled selected value="">Elige un vehiculo</option>
                @foreach($vehiculos as $vehiculo)
                <option value="{{ $vehiculo->id }}">{{ $vehiculo->marca." ".$vehiculo->nombre }}</option>
                @endforeach
            </select>
            @error('vehiculo_id')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="precio_v">Precio de venta</label>
            <input type="number" class="form-control" id="precio_v" name="precio_v" value="{{ old('precio_v', $llanta->precio_v) }}">
            @error('precio_v')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="precio_c">Precio de compra</label>
            <input type="number" class="form-control" id="precio_c" name="precio_c" value="{{ old('precio_c', $llanta->precio_c) }}">
            @error('precio_c')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="descuento">Descuento</label>
            <input type="number" class="form-control" id="descuento" name="descuento" value="{{ old('descuento', $llanta->descuento) }}">
            @error('descuento')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
        <div class="form-group col-md-3">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{old('stock', $llanta->stock)}}">
            @error('stock')
            <small>*{{$message}}</small>
            <br>
            @enderror
        </div>
    </div>
    <input type="hidden" id="activo" name="activo" value="1"/>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
    <a href="{{ url('llanta/') }}" class="btn btn-danger">Regresar</a>
</form>
@endsection