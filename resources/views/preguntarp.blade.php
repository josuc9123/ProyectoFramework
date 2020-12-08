@extends('layout.dash')

@section('title', 'crear')


@section('content')

@if(session('preguntaenviada'))
<div class="alert alert-success">
{{ session('preguntaenviada') }}
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
    @if($productos->Nom_Producto)
    <form action="{{ route('preguntar')}}" method="POST"> 
    @csrf
    
<input  name="usuario" type="text" value="{{ Auth::user()->name}}">
<input name="pregunta" type="text" placeholder="¿Que desea preguntar?">
<input name="producto" type="text" value="{{$productos->Nom_Producto}}">
@endif

<button type="submit"  class="btn btn-outline-success">Enviar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection