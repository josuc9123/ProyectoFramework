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

    <form action="{{ route('savePR', $productos->id)}}" method="POST"> 
    @csrf @method('PUT')
<input  name="Nom_Producto" type="text" placeholder="categoria" value="{{ $productos->Nom_Producto}}">
<input name="cantidad" type="text" placeholder="descripcion"value="{{ $productos->cantidad}}">
<input name="precioU" type="text" placeholder="descripcion"value="{{ $productos->precioU}}">
<input name="tipo_producto" type="text" value="{{ $productos->tipo_producto}}">
<input name="descripcion" type="text" placeholder="descripcion">

<button type="submit"  class="btn btn-outline-success">Rechazar</button>
<form action="{{ route('savePR', $productos->id)}}​​" method="post">
@csrf
@method('PUT')
<center><button type="submit" class="btn-success">Aceptar</button></center>
</form>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection