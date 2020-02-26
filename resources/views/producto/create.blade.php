@extends('producto.layout')

@section('encabezado')
   <h2>Agregar Productos</h2>
@endsection
 
@section('contenido')
 
<form action="{{ route('producto.store') }}" method="POST" name="add_product">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombreProducto" class="form-control" placeholder="Ingrese nombre">
            <span class="text-danger">{{ $errors->first('nombreProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Código</strong>
            <input type="text" name="codigoProducto" class="form-control" placeholder="Ingrese código">
            <span class="text-danger">{{ $errors->first('codigoProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcionProducto" placeholder="Ingrese Descripción"></textarea>
            <span class="text-danger">{{ $errors->first('descripcionProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection