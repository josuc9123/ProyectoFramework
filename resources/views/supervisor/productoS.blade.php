@extends('layout.superv')

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
      @can('create', App\Models\Productos::class) 
      <th><a href="{{ url('/crearP')}}" class="btn btn-outline-dark">Agregar</a></th>
      @endcan
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $producto)
  <tr>
      <td>{{ $producto->id}}</td>
      <td>{{ $producto->Nom_Producto}}</td>
      <td>{{ $producto->cantidad}}</td>
      <td>{{ $producto->precioU}}</td>
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $producto->url_path}}"></td>
    <td>
      @can('create', App\Models\Productos::class)
        <a href="{{route('editarP', $producto->id)}}" class="btn btn-outline-success">Editar</a>
      @endcan
      @can('create', App\Models\Productos::class)
        <a href="{{route('kardex', $producto->id)}}" class="btn btn-outline-success">Ver Cardex</a>
      @endcan
      @can('create', App\Models\Productos::class)
        <form action="{{route('delete', $producto->id)}}" method="POST">
      @csrf @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
       @endcan
        </form>
   
    </td>
  </tr>
      @endforeach
      {{ $productos->links() }} 
  </tbody>
</table>

</div>

@endsection