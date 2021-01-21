@extends('layout.superv')

@section('title', 'categorias')
@section('content')
<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
<script type="text/javascript">
      function ConfirmDelete()
      {
        var respuesta = confirm("¿comprar este producto?");
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
@if(session('productoEliminado'))
    <div class="alert alert-seccess">
{{ session('productoEliminado')}}
@endif
<a><form action="{{route('buscar')}}">Buscar por Nombre</a>
 <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar" aria-label="Search">
  </form>
  
   <table class="table table-bordered table-striped text-center" id="tbl_productos">
  <thead>
<tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Imagen</th>
      <th scope="col">Recibi Producto</th>
      <a>Doble click en recibi producto para aceptar o rechazar </a>
</tr>
  </thead>
  <tbody>
  @foreach($productos as $producto)
  <tr id="{​​{​​$producto->id}​​}"​​>
      <td>{{ $producto->id}}</td>
      <td>{{ $producto->Nom_Producto}}</td>
      <td><img class="img-thumbnail"width="100" height="100" src="{{ $producto->url_path}}"></td>
    <td class="tipo" data-original="{​​{​​$producto->recibido}​​}​​">{{ $producto->recibido}}</td>
     <a href="{{route('revisarP', $producto->id)}}" class="btn btn-outline-success">Revisar</a>
  </tr>
      @endforeach
  
  </tbody>
</table>
</div>
@endsection
@section('escripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/axios.js"></script>
<script>
var mostrandoInput = false;
$().ready( function(){
    $(".tipo").dblclick(function(){
        if (mostrandoInput) return;
        original =  this.innerText;
        var opciones = '<select name="recibido" data="">';
        if(original == "recibido")
        opciones+=' <option selected>recibido</option>';
        else
        opciones+=' <option>recibido</option>';
        if (original == "no recibido")
        opciones+=' <option selected>no recibido</option>';
        else
        opciones+=' <option>no recibido</option>';
        opciones+='</select>';
        this.innerHTML = opciones;
        mostrandoInput = true;
    });
    $(".tipo").keydown(function(event){
    if ( event.which == 27 ) {
    this.innerText = this.dataset["original"];
    mostrandoInput = false;
    }
    if ( event.which == 13 ) {
    var recibido = this.children[0].value;
    this.innerText = "";
    axios.put('/_Concesionar/' + this.parentElement.id , {
    _token: '{{ csrf_token() }}',
    recibido: recibido ,
})
.then(function (response){
    td = $("tr#" + response.data.id + ">td.tipo").text(response.data.recibido);
//.text(response.data.equipo);
console.log(response);
})
.catch(function (error) {
if(error.response.status==401)alert("Usted no ha iniciado en el sistema");
if(error.response.status==500)alert(error.response.data.message);
else alert(error.response.data.error);
console.log(error);
});
}
}); 
});
</script>

@endsection


