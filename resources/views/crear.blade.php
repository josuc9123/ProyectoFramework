@extends('layout.superv')
@section('title', 'crear')
@section('content')
@if(session('usuarioGuardado'))
<div class="alert alert-success">
{{ session('usuarioGuardado') }}
</div>

@endif
    @if($errors->any())
    <div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
    @endif
    <form action="{{ route('save')}}" method="POST"> 
    @csrf
    <div class="form-group">
<input  name="name" type="text"class="form-control" placeholder="usuario">
</div>
<div class="form-group">
<input name="email" type="text"class="form-control" placeholder="correo">
</div>
<div class="form-group">
<input name="tipo" type="text" class="form-control" placeholder="tipo">
</div>
<div class="form-group">
<input name="password" type="password" class="form-control" placeholder="otorgar contraseña">
</div>
<button type="submit" >Enviar</button>
</form>
</div>
</table>
<button href="usuariosS">regresar</button>
@endsection