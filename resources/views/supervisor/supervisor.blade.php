@extends('layout.superv')
@section('title', 'Page Title')
@section('content')
@can('create', App\Models\Categorias::class)
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<table class="table table-bordered table-striped text-center">

@if($users->count())
<thead>
  <tr>
      <th scope="col">Usuarios</th>
  </tr>
</thead>
<tr>
  <td><p>total de usuarios registrados: {{$users->count()}}</td>
</tr>
  </table>  
@endif

<table class="table table-bordered table-striped text-center">
 @foreach($productos as $producto)
     <thead>
      <tr>
        <th scope="col">Productos</th>
      </tr>
     </thead>
      <tr>
       <td> <p>total de Productos registrados: {{$producto->count()}}</p></td>   
      </tr>
</table>
@endforeach
<table class="table table-bordered table-striped text-center">
 @if($transacciones->count())
     <thead>
      <tr>
        <th scope="col">transacciones</th>
        </tr>
     </thead>
      <tr>
       <td> <p>total de Transaciones Realizadas: {{$transacciones->count()}}</p></td>   
      </tr>
</table>
</div>
@endif
@endcan  
</body>
 <body>
 <section class="page-section cta">
     <div class="container" >
    <div class="row">
       <div class="col-xl-9 mx-auto">
       <div class="cta-inner text-center rounded">
         <h2 class="section-heading mb-4">
         <span class="section-heading-upper">Compromiso total</span>
           <span class="section-heading-lower">Garantizado</span>
           </h2>
       <p class="mb-0">Con más de 25 años de experiencia a nuestras espaldas, conocimiento y herramientas necesarias para solucionar problemas.</p>
    </div>
 </div>
</div>
</div>
 </section>
         
 
@endsection