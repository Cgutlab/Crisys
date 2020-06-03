@extends('layouts.app')
@section('title')
	Solicitar Presupuesto
@endsection
@section('content')
<div class="content-text-hero mb-5">
	<div class="wrapper row flex-column justify-content-end hero-content-text-height">
		<h1 class="hero-content-text">Soluciones a medida</h1>
	</div>
</div>
<div class="wrapper mb-5 content-soluciones">
	<div class="row">
		<div class="col-md-5">
			<div id="solucionesSliderI" class="carousel slide mb-5" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active" style="">
			      <img class="d-block w-100 img-fluid" src="{{asset('img/soluciones_medida/s1.jpg')}}" alt="First slide">
			    </div>
			  </div>
			</div>
			<div class="mb-4">
				<h3 class="color-azul-bootstrap font-weight-bold mb-4"><span>Equipo de</span><br> Ingeniería</h3>
				<p>Nos empeñamos en acompañar y cubrir todas las exigencias de la industria, siempre en constante evolución. Con este objetivo, mantenemos una política de mejora continua en el proceso de construcción y diseño de los equipos y máquinas. Contamos con un grupo de trabajo altamente especializado, capacitado permanentemente con los avances de la tecnología.</p>
			</div>
			<div id="solucionesSliderII" class="carousel slide mb-5" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active" style="">
			      <img class="d-block w-100 img-fluid" src="{{asset('img/soluciones_medida/s3.jpg')}}" alt="First slide">
			    </div>
			  </div>
			</div>
			<div class="mb-4">
				<h3 class="color-azul-bootstrap font-weight-bold mb-4"><span>Servicio de </span><br> Desarrollo</h3>
				<p>CriSys Ingeniería S.R.L. es una empresa que desde el año 1990 se especializa en la Fabricación de Máquinas Envasadoras y Repuestos, y en la Modificación, Reparación y Reingeniería de Equipos de Envasado, aportando la seguridad y garantía que significan todos estos años de presencia en el mercado.</p>
				<p>Realizamos Servicio Integral a medida, adaptado a las necesidades de cada uno de nuestros clientes.</p>
			</div>
		</div>
		<div class="col-md-2 oso-mobile-d-none">
			<img class="img-fluid d-block mx-auto" src="{{asset('img/soluciones_medida/i1.jpg')}}" alt="">
			<div class="linerar-vertical"></div>
			<img class="img-fluid d-block mx-auto" src="{{asset('img/soluciones_medida/i2.jpg')}}" alt="">
			<div class="linerar-vertical"></div>
			<img class="img-fluid d-block mx-auto" src="{{asset('img/soluciones_medida/i3.jpg')}}" alt="">
			<div class="linerar-vertical"></div>
			<img class="img-fluid d-block mx-auto" src="{{asset('img/soluciones_medida/i4.jpg')}}" alt="">
			<div class="linerar-vertical"></div>
		</div>
		<div class="col-md-5">
			<div class="mb-4">
				<h3 class="color-azul-bootstrap font-weight-bold mb-4"><span>Primeros Pasos</span><br> Estudio</h3>
				<p class="mb-5">Nuestra filosofía de trabajo nos compromete a cumplir con celeridad y eficiencia todos los requerimientos de los clientes. Porque conocemos la importancia del tiempo en la producción, la entrega de equipos como la atención de post-venta cumplen con esta visión de rapidez y eficacia. </p>
			</div>
			<div id="solucionesSliderIII" class="carousel slide mb-5" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active" style="">
			      <img class="d-block w-100 img-fluid" src="{{asset('img/soluciones_medida/s2.jpg')}}" alt="First slide">
			    </div>
			  </div>
			</div>
			<div class="mb-4">
				<h3 class="color-azul-bootstrap font-weight-bold mb-4"><span>Proceso de </span><br>Implementación</h3>
				<p class="">Nos distingue una rápida adaptación a las necesidades del cliente a partir de una estructura flexible.</p>
				<p class="mb-5">Crisys Ingeniería S.R.L. articula las exigencias de calidad internacional con el costo local de sus servicios, constituyendo la mejor alternativa del mercado para garantizar la calidad de los procesos de envasado de las industrias farmacéutica, veterinaria, cosmética y alimenticia.</p>
			</div>
			<div id="solucionesSliderIV" class="carousel slide mb-4" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active" style="">
			      <img class="d-block w-100 img-fluid" src="{{asset('img/soluciones_medida/s4.jpg')}}" alt="First slide">
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection