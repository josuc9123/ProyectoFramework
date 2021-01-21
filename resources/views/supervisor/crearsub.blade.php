@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('categoriaGuardado'))
<div class="alert alert-success">
{{ session('categoriaGuardado') }}
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

    <form action="{{ route('saveSub')}}" method="POST"> 
<div class="fomr-group">
<input type="hidden" class="form-control" name="parent_id" value="{{ $categorias->id }}">
</div>
    @csrf
<input  name="categorias" type="text" placeholder="categorias">
<input name="descripcion" type="text" placeholder="descripcion">
<input name="tipo" type="text" placeholder="tipo">


<button type="submit"  class="btn btn-outline-success">Enviar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection