@extends('layouts.app')
@section('title')
Home
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
      <img class="d-block w-100" src="{{asset('img/home/slider.jpg')}}" alt="First slide">
		<h4 class="position-absolute oso-vertical-middle oso-home-slider-title">
			<strong class="oso-home-slider-title-strong mb-1">SOLUCIONES INTEGRALES</strong><br>
			PARA LA INDUSTRIA DEL ENVASADO
		</h4>
    </div>
  </div>
</div>
<div>
	<div class="row justify-content-between pt-5 pb-5 wrapper">
		<div class="col-md-6 position-relative oso-mb-3">
			<a href="{{route('maquinas')}}">
				<img class="img-fluid oso-mobile-w-100" src="{{asset('img/home/card1.jpg')}}" alt="">
				<h3 class="position-absolute title-image">Máquinas</h3>
			</a>
		</div>
		<div class="col-md-6 position-relative oso-mb-3">
			<a href="{{route('soluciones-a-medida')}}">
				<img class="img-fluid oso-mobile-w-100" src="{{asset('img/home/card2.jpg')}}" alt="">
				<h3 class="position-absolute title-image">Soluciones a medida</h3>			
			</a>
		</div>
	</div>
</div>
<div class="pb-5">
	<div class="row pb-3 wrapper">
		<div class="col-md-12 text-center mb-3">
			<h4 class="mb-4 title-valor-agregado">VALOR AGREGADO INGENIERIA CRISYS</h4>	
		</div>
		<div class="col-md-12">
			<div class="row home-items-p">
				<div class="col-md-3">
					<div><img class="d-block mx-auto mt-2 mb-2" src="{{asset('img/home/icon1.jpg')}}" alt=""></div>
					<p class="text-center pt-2">Conocimiento técnico especializado</p>
				</div>
				<div class="col-md-3">
					<div><img class="d-block mx-auto mt-2 mb-2" src="{{asset('img/home/icon2.jpg')}}" alt=""></div>
					<p class="text-center pt-2">Confiabilidad, precisión <br> y respaldo técnico</p>
				</div>
				<div class="col-md-3">
					<div><img class="d-block mx-auto mt-2 mb-2" src="{{asset('img/home/icon3.jpg')}}" alt=""></div>
					<p class="text-center pt-2">Velocidad de respuesta <br> y capacidad de innovación</p>
				</div>
				<div class="col-md-3">
					<div><img class="d-block mx-auto mt-2 mb-2" src="{{asset('img/home/icon4.jpg')}}" alt=""></div>
					<p class="text-center">Relación entre el valor del producto y su calidad</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="position-relative" style="background-image: url('{{asset('img/home/banner.jpg')}}');min-height: 300px;display: flex;flex-direction: column;justify-content: center; background-repeat: no-repeat; align-items: left; background-size: cover;     background-repeat: no-repeat; background-size: cover; background-position: center;">
	<div class="image-presupuesto-ml-80" style="max-width: 1200px">
		<strong class="color-white image-presupuesto-strong">Solicite presupuesto</strong><br>
		<span class="image-presupuesto-span mb-3">Fácil, rápido y online</span><br>
		<a class="btn btn-primary image-presupuesto-link" href="/proyectoactual/crisys/public/solicitar-presupuesto">Enviar</a>
	</div>
</div>
@endsection