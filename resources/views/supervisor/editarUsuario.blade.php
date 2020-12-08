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
    <div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
    <table class="table table-bordered table-striped text-center">
    <form action="{{ route('editU', Auth::user()->id)}}" method="POST"> 
    @csrf @method('PATCH')
<tr>
<th>NOMBRE</th>
<th>EMAIL</th>
<th>password</th>
</tr>
<tr>
<td><input  name="name" type="text" value="{{ Auth::user()->name}}"></td>
<td><input name="email" type="text" value="{{ Auth::user()->email}}"></td>
<td><input name="password" type="password" value="{{ Auth::user()->password}}"></td>
</tr>

</div>
</table>
<button type="submit"  class="btn btn-outline-success">Modificar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>

@endsection