@extends('layout.superv')

@section('title', 'categorias')
@section('content')
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<script type="text/javascript">
      function ConfirmDelete()
      {
        var respuesta = confirm("¿comprar este producto?");
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
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $producto->url_path}}"></td>
    <td>
     <a href="{{route('revisarP', $producto->id)}}" class="btn btn-outline-success">Revisar</a>
      
   </td>
  </tr>
      @endforeach
  
  </tbody>
</table>
</div>
@endsection

