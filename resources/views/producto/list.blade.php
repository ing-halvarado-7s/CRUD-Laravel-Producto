@extends('producto.layout')

@section('encabezado')
   <h2>Listado de produtos</h2>
@endsection
   
@section('contenido')
  <a href="{{ route('producto.create') }}" class="btn btn-success mb-2">Agregar</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Código</th>
                 <th>Descripción</th>
                 <th>Fecha de Creación</th>
                 <th colspan="2">Acción</th>
              </tr>
           </thead>
           <tbody>
              @foreach($productos as $producto)
              <tr>
                 <td>{{ $producto->id }}</td>
                 <td>{{ $producto->nombreProducto }}</td>
                 <td>{{ $producto->codigoProducto }}</td>
                 <td>{{ $producto->descripcionProducto }}</td>
                 <td>{{ date('Y-m-d', strtotime($producto->created_at)) }}</td>
                 <td><a href="#" class="btn btn-primary">Editar</a></td>
                 <td>
                 <form action="#" method="post">
                  
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $productos->links() !!}
       </div> 
   </div>
 @endsection  