@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('productoModificado'))
<div class="alert alert-success">
{{ session('productoModificado') }}
</div>

@endif
    @if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
    @endif

    <form action="{{ route('editM', $productos->id)}}" method="POST"> 
    @csrf @method('PATCH')
<input  name="Nom_Producto" type="text" placeholder="categoria" value="{{ $productos->Nom_Producto}}">
<input name="cantidad" type="text" placeholder="descripcion"value="{{ $productos->cantidad}}">
<input name="precioU" type="text" placeholder="descripcion"value="{{ $productos->precioU}}">
<input name="tipo_producto" type="text" placeholder="tipo"value="{{ $productos->tipo_producto}}">
<input name="imagen" type="file" style="color:white" placeholder="imagen">

<button type="submit"  class="btn btn-outline-success">Modificar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection