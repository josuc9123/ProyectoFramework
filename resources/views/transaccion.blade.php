@extends('layout.dash')

@section('title', 'crear')


@section('content')
<html>
<section class="page-section cta">
  <div class="container" >
    <div class="row">
       <div class="col-xl-9 mx-auto">
         <div class="alert alert-primary">
          <div id="content" class="col-lg-12">
 <form action="{{route('calificarT')}}">
  <a>CALIFICAR TRANSACCION</a>
    <div class="star_content">
       <a><input name="exelente" value="1" type="radio" class="star"/>Exelente</a> 
       <a><input name="bueno" value="2" type="radio" class="star"/>Bueno</a> 
       <a><input name="normal" value="3" type="radio" class="star"/>Normal</a> 
       <a><input name="puede_mejorar" value="4" type="radio" class="star" checked="checked"/>Puede mejorar</a> 
        <a><input name="malo" value="5" type="radio" class="star"/>Mala</a>
        
     </div>
        <button type="submit"  class="btn btn-primary btn-sm">Enviar</button>
  </form>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>
</html>
@endsection