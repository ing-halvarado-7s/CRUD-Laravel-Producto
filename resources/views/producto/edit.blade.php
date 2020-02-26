@extends('producto.layout')

@section('encabezado')
   <h2>Editar Productos</h2>
@endsection
 
@section('contenido')

 
<form action="{{ route('producto.update', $product_info->id) }}" method="POST" name="update_product">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombreProducto" class="form-control" placeholder="Ingrese Nombre" value="{{ $product_info->nombreProducto }}">
            <span class="text-danger">{{ $errors->first('nombreProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Código</strong>
            <input type="text" name="codigoProducto" class="form-control" placeholder="Ingrese Código" value="{{ $product_info->codigoProducto }}">
            <span class="text-danger">{{ $errors->first('codigoProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcionProducto" placeholder="Ingrese Descripción" >{{ $product_info->descripcionProducto }}</textarea>
            <span class="text-danger">{{ $errors->first('descripcionProducto') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection