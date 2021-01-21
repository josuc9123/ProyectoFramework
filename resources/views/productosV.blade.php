@extends('layout.superv')

@section('title', 'categorias')


@section('content')
@if(session('calificar'))

    {{ session('calificar')}}
    @endif
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<script type="text/javascript" style="pading-center">

      function ConfirmDelete()
      {
        var respuesta = confirm("CONFIRMA LA TRANSACCION PARA LA COMPRA DEL PRODUCTO");
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
      <th scope="col">Precio/U</th>
      <th scope="col">Imagen</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $producto)
  <tr>
      <td>{{ $producto->id}}</td>
      <td>{{ $producto->Nom_Producto}}</td>
      <td>{{ $producto->precioU}}</td>
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $producto->url_path}}"></td>
    <td>
    <td>
    @can('update', App\Models\Productos::class)
    <form action="{{url('transaccion')}}" >
    <button type="submit" class="btn btn-outline-success" onclick="return ConfirmDelete()">Comprar</button>
    </form> 
    <a href="{{route ('preguntarp',$producto->id)}}" class="btn btn-outline-success">Preguntar</a>
     
      @can('create', App\Models\Productos::class)
        <a href="{{route('kardex', $producto->id)}}" class="btn btn-outline-success">Ver Cardex</a>
      @endcan
      @can('create', App\Models\Productos::class)
        </form>
        @endcan
   </td>
    

     
   
    </td>
  </tr>
      @endforeach
      {{ $productos->links() }} 
  </tbody>
</table>

</div>

@endsection
