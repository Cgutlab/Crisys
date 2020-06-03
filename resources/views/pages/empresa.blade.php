@extends('layouts.app')
@section('title')
	Empresa
@endsection
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="">
      <img class="d-block w-100" src="{{asset('img/slider/slider2.jpg')}}" alt="First slide">
		<h4 class="position-absolute oso-vertical-middle oso-home-slider-title">
			<strong class="oso-home-slider-title-strong mb-1">INGENIERÍA CRISYS</strong><br>
			FABRICACIÓN Y REPARACIÓN
		</h4>
    </div>
  </div>
</div>
<div class="pt-5 pb-5">
	<div class="wrapper">
		<div class="row">
			<h1 class="col mb-3 title-empresa">Empresa</h1>
			<div class="w-100"></div>
			<div class="col-md-8 parraf-empresa">
				<p class="font-weight-bold">Desde su fundación en 1990, criSys ingeniería se caracteriza por <span>brindar las mejores Soluciones de Ingeniería a la Industria del Envasado</span>.</p>
				<p class="font-weight-bold">criSys Ingeniería se especializa en la <span>fabricación de maquinas envazadoras y repuestos</span> y en la modificación, reparación y reingeniería de equipos de envasado, aportando la seguridad y garantía que significan más de 28 años de presencia en el mercado.</p>
				<p class="font-weight-bold">El conocimiento técnico especializado acerca de las prestaciones y exigencias de la industria del envasado, garantiza el rendimiento de máquinas y repuestos fabricados por criSys ingeniería, como de aquellos reparados y madificados bajo su supervisión técnica.</p>
			</div>
			<div class="col-md-4">
				<div class="row align-items-center">
					<div class="col-4 number-empresa text-right">28</div>
					<div class="col dato-text-empresa">más de 28 años de trayectoria</div>
					<div class="w-100"></div>
					<div class="col-4 number-empresa text-right">300</div>
					<div class="col dato-text-empresa">nuestro catálogo de repuestos</div>
					<div class="w-100"></div>
					<div class="col-4 number-empresa text-right">2</div>
					<div class="col dato-text-empresa">sedes de desarrollo y frabicación</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="pb-5">
	<div class="wrapper">
		<div class="card-columns">
		  <div class="card">
		    <img src="{{asset('img/empresa/card1.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		  <div class="card">
		    <img src="{{asset('img/empresa/card3.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		  <div class="card">
		    <img src="{{asset('img/empresa/card3.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		  <div class="card">
		    <img src="{{asset('img/empresa/card4.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		  <div class="card">
		    <img src="{{asset('img/empresa/card0.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		  <div class="card">
		    <img src="{{asset('img/empresa/card5.jpg')}}" class="card-img-top img-fluid" alt="...">
		  </div>
		</div>
	</div>
</div>
@endsection