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
    @if(session('categoriaEliminado'))
    <div class="alert alert-seccess">
    {{ session('categoriaEliminado')}}
    
    @endif
    <a><form action="{{route('buscar')}}">Buscar por Nombre</a>
 <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Search">
  </form>
    <table class="table table-bordered table-striped text-center">
  <thead>
      
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
      @can('create', App\Models\Categorias::class)
      <th><a href="{{ url('/crearC')}}" class="btn btn-outline-dark">Agregar</a></th>
      @endcan
    </tr>
  </thead>
  <tbody>
  @foreach($categorias->subCategoria as $categoria)
  <tr>
      <td>{{ $categoria->id}}</td>
      <td>{{ $categoria->categorias}}</td>
      <td>{{ $categoria->descripcion}}</td>
    <td>
    @can('create', App\Models\Categorias::class)
        <a href="{{route('editarC', $categoria->id)}}" class="btn btn-outline-success">Editar</a>
      @endcan
        <a href="{{route('mostrarp', $categoria->tipo)}}" class="btn btn-outline-success">Mostrar</a>
      @can('create', App\Models\Categorias::class)
    <form action="{{route('deleteC', $categoria->id)}}" method="POST">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
      @endcan
    </form>
      
      </td>
 </tr>
      @endforeach
      
  </tbody>
</table>

</div>
@endsection
