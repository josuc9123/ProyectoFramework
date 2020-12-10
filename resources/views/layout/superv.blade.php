<html>
    <head>
        <title>proyecto 202 @yield('title')</title>
    </head>
    <body>
        @section('barra lateral')
            <!doctype html>
            <!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../dashboard/dashboard.css" rel="stylesheet">
  </head>
  <body>
  @guest
 
@if (Route::has('login'))

<li>
   <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
  <li>
 @endif
                            
 @if (Route::has('register'))
  
      <a class="link " href="{{ route('register') }}">{{ __('Register') }}</a>
    
@endif
@else
<nav class="navbar navbar-dark sticky-top bg-rgb flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="">TNTSystem Electronic</a>
<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
  <div class="dropdown btn-group dropleft">
  
  <a id="navbarDropdown" class="link dropdown-toggle col-lg-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
  
        {{ Auth::user()->name }}
  </a>   
    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="{{route('editarUsuario',Auth::user()->id)}}">Editar Usuario</a>
       <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
        </a>
        
   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
   </form>
   </div>
     </div>
     
     </div>
     
     </nav>
    @endguest

      <link href="../css/gestion20.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard/dashboard.js"></script></body>
</html>
          
        <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Carousel Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel3.css" rel="stylesheet">
<!-- Bootstrap -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Fonts -->
    
     <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
     

    <!-- Styles -->
    <link href="../public/css/gestion20.css" rel="stylesheet">
    
  </head>
         

  
 
<div class="page-section cta" style="color: rgba(255, 255, 255, 0.85);" >
  <div class="container">
    <h1 class="display-3">BIENVENIDO <img src="../img/diag.png"> </h1> 
   <p>Trabajamos para mejorar la vida de tus dispositivos.</p>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="base.html">Gestión de Pedidos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav mx-auto">
      <ul class="navbar-nav mx-auto">
      @can('create', App\Models\Categorias::class)
        <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/supervisor">TNTSystem</a>  
     </li>
    @endcan
    @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/usuariosS">Usuarios</a>
        </li> @endcan
  
      <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/home">Home</a>
            </ul>
           
      @can('create', App\Models\Categorias::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded"href="/categorias">Categorias</a>
          </li>
          @endcan
          @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/vendedores">Vendedores</a>
            </li>
         @endcan 
         @can('create', App\Models\Anonimo::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/login">Login</a>
            </li> 
            @endcan
            @can('create', App\Models\Anonimo::class)
         <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/Vendedores">Vendedores</a>
            </li> 
            @endcan
          @can('create', App\Models\Categorias::class)
        <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="/productoS">Productos</a>
            </ul>
         @endcan  
        </li>
        </li>
      </ul>
      </ul>   
    </div>  
  </div>
</nav>
</div>
@show

       
@yield('content')
<footer class="footer text-faded text-center py-5">
    <div class="container">
              <p class="m-0">
                  <a href="#" class="link">
 <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
         <a href="#" class="link">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
               <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
           </a>
                  <a href="#" class="link">
       <span class="fa-stack fa-lg">
           <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
 </a>
              </p>
  <p class="m-0 mbt">
  <!-- agregue las politicas-->
        <a href="sample.html" class="link">Política de privacidad</a> ·
       <a href="sample.html" class="link">Aviso legal</a> ·
        <a href="sample.html" class="link">Cookies</a>
      </p>
    <p class="m-0 mbt1">&copy; Gestión de Pedidos 2020</p>
 </div>
  </footer>
      
          <!-- Bootstrap -->
 <script src="../public/vendor/jquery/jquery.min.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


