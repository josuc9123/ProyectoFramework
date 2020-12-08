@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('usuarioModificado'))
<div class="alert alert-success">
{{ session('usuarioModificado') }}
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

    <form action="{{ route('edit', Auth::user()->id)}}" method="POST"> 
    @csrf @method('PATCH')
<input  name="name" type="text" value="{{ Auth::user()->name}}">

<input name="email" type="text" value="{{ Auth::user()->email}}">


<button type="submit"  >Modificar</button>
</form>
<button   href="{{ url('usuariosS')}}">regresar</button>
@endsection