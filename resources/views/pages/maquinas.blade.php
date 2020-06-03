@extends('layouts.app')
@section('title')
	Maquinas
@endsection
@section('content')
<div class="content-text-hero mb-3">
	<div class="wrapper row flex-column justify-content-end hero-content-text-height">
		<h1 class="hero-content-text">Máquinas</h1>
	</div>
</div>
<div class="pt-5 pb-5 section-maquinas">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat1.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 1])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Equipo monoblock automático</p>
				  </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat2.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 2])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Cerradura automática</p>
				  </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat3.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 3])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Sopladora para limpieza de envases</p>
				  </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat4.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 4])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Dosificadora de líquidos y viscosos</p>
				  </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat5.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 5])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Docificadora de polvo</p>
				  </div>
				</div>			
			</div>
			<div class="col-md-4 mb-4">
				<div class="card w-100" style="">
				  <div class="position-relative">
				  	<img src="{{asset('img/categorias/cat6.jpg')}}" class="card-img-top img-fluid" alt="...">
				  	<div class="position-absolute maquinas-content-mas d-none">
				  		<p class=""><a class="color-white" href="{{route('maquina', ['id' => 6])}}"><i class="fas fa-plus"></i> ver más</a></p>
				  	</div>
				  </div>
				  <div class="card-body">
				    <p class="card-text">Máquina cerradora semi-automática</p>
				  </div>
				</div>			
			</div>
		</div>
	</div>
</div>
<div>
	<div class="wrapper row">
		<div class="col"></div>
	</div>
</div>
@endsection