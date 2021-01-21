@extends('layout.dash')
@section('title', 'categorias')


@section('content')



<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">

<script type="text/javascript">
      function ConfirmDelete()
      {
        var respuesta = confirm("estas seguro de eliminar este producto");
        if (respuesta == true)
        {
          return true;
        }
        else
        {
          return false;
        }
      }
    </script>
    @if(session('productoEliminado'))
    <div class="alert alert-seccess">
    {{ session('productoEliminado')}}
    @endif
    
    <a><form action="{{route('buscar')}}">Buscar por Nombre</a>
    <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Search">
    </form>
    <table class="table table-bordered table-striped text-center">
  <thead>
      
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio/U</th>
      <th scope="col">Imagen</th>
      
      <th><a href="{{ url('/crearM')}}" class="btn btn-outline-dark">Proner</a></th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($mproductos as $mproducto)
  <tr>
      <td>{{ $mproducto->id}}</td>
      <td>{{ $mproducto->Nom_Producto}}</td>
      <td>{{ $mproducto->cantidad}}</td>
      <td>{{ $mproducto->precioU}}</td>
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $mproducto->url_path}}"></td>
    <td>
      
        <a href="{{route('editarM', $mproducto->id)}}" class="btn btn-outline-success">Editar</a>
     
        <form action="{{route('deleteM', $mproducto->id)}}" method="POST">
   
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
    
        </form>
   
    </td>
  </tr>
      @endforeach
      {{ $mproductos->links() }} 
  </tbody>
</table>

</div>

@endsection