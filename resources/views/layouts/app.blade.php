<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>@yield('title')</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">  

    <!-- Icons FontAwesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
{{--    <link href="{{ asset('css/app.css') }} " rel="stylesheet">
   <link href="{{ asset('css/animated.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
   <link rel="stylesheet" href="{{asset('css/animated.css')}}">
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div id="app">
        <div class="pb-1 pt-1 content-pre-header oso-mobile-d-none">
          <div class="row justify-content-between align-items-center wrapper" style="font-size: 14px;
font-weight: bold;">
            <div class="col-md-3">
              <a href="">
                <span class="oso-gris-apacity">Siguenos en</span> 
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
            <form class="form-inline my-2 my-lg-0">
              <button class="btn my-2 my-sm-0" type="submit" ><i class="fas fa-search"></i></button>
              <input class="form-control mr-sm-2 header-buscador" style="" type="search" placeholder="Estoy buscando..." aria-label="Search">
            </form>
          </div>
         </div>
         <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light header-menu">
              <a class="navbar-brand d-md-none" href="proyectoactual/crisys/public/"><img class="" style="max-width: 50%;" src="{{asset('img/logo/header.png')}}" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center justify-content-between w-100">
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('empresas')}}">Empresas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('maquinas')}}">Máquinas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('soluciones-a-medida')}}">Soluciones a Medida</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('servicios')}}">Servicios</a>
                  </li>
                  <li class="nav-item oso-mobile-d-none">
                    <a class="nav-link" href="{{route('home')}}"><img class="logo-menu-header" src="{{asset('img/logo/header.png')}}" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('videos')}}">Videos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('casos-de-exito')}}">Casos de Éxito</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('solicitar-presupuesto')}}">Solicitar Presupuesto</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
                  </li>
                </ul>
              </div>
            </nav>
         </div>
         <main class="">
             @yield('content')
         </main>
      </div>
      <footer id="footer" class="oso-mobile-text-center">
         <div class="wrapper row footer-content-primary pb-3" style="">
            <div class="col-md-4 oso-mb-3">
               <h6>SECCIONES</h6>
               <ul class="row">
                  <li class="col-md-6 col-sm-12">
                     <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Empresa</a></li>
                        <li><a href="">Máquinas</a></li>
                        <li><a href="">Soluciones a Medida</a></li>
                        <li><a href="">Servicios</a></li>
                     </ul>
                  </li>
                  <li class="col-md-6 col-sm-12">
                     <ul>
                        <li><a href="">Videos</a></li>
                        <li><a href="">Casos de Éxito</a></li>
                        <li><a href="">Solicitar Presupuesto</a></li>
                        <li><a href="">Contacto</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
            <div class="col-md-4 oso-mb-3">
               <ul class="text-center">
                  <li class="mb-3"><a href=""><img class="d-block mx-auto" src="{{asset('img/logo/footer.png')}}" alt=""></a></li>
                  <li class="color-white">Siguenos en <i class="fab fa-facebook-square"></i></li>
               </ul>
            </div>
            <div class="col-md-4 col-sm-12 oso-mb-3">
               <h6>INGENIERIA CRISYS</h6>
               <ul class="footer-content-addres">
                  <li>
                     <ul class="row">
                        <li class="col position-relative"><i class="fas fa-map-marker-alt position-absolute"></i><span>Corrientes 3651 - Quilmes Oeste, Buenos Aires, Argentina</span></li>
                     </ul>
                  <li>
                     <ul class="row">
                        <li class="col position-relative"><i class="fas fa-phone-volume position-absolute"></i><span>(011) 4200-9399</span></li></li>
                     </ul>
                  <li>
                     <ul class="row">
                        <li class="col position-relative"><i class="fas fa-envelope position-absolute"></i><span><a href="" class="color-white">info@crisys.com.ar</a></span></li>
                     </ul>
               </ul>
            </div>
         </div>
         <div class="wrapper">
            <a href=""><span class="float-right by-osole">BY OSOLE</span></a>
         </div>
      </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('js/mostrarSeccionesForm.js')}}"></script>
</body>
</html>
