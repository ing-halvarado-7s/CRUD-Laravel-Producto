@extends('producto.layout')
   
@section('contenido')
  <a href="#" class="btn btn-success mb-2">Agregar</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Title</th>
                 <th>Product Code</th>
                 <th>Description</th>
                 <th>Created at</th>
                 <td colspan="2">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($productos as $producto)
              <tr>
                 <td>{{ $producto->id }}</td>
                 <td>{{ $producto->title }}</td>
                 <td>{{ $producto->product_code }}</td>
                 <td>{{ $producto->description }}</td>
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