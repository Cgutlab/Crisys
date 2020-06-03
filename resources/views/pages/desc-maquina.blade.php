@extends('layouts.app')
@section('title')
@endsection
@section('content')
<div class="content-text-hero mb-5">
	<div class="wrapper row flex-column justify-content-end hero-content-text-height">
		<a href="{{route('maquinas')}}"><h1 class="hero-content-text"><i class="fas fa-angle-double-left"></i> Volver</h1></a>
	</div>
</div>
<div>
	<div class="wrapper row">
		<div class="col-md-6">
			<img class="imagen-producto-individual img-fluid" src="{{asset('img/ficha_producto/i1.jpg')}}" alt="">
		</div>
		<div class="col-md-6">
			<h2 class="titulo-producto-individual">Equipo monoblock automático</h2>
			<p class="font-weight-bold"><span class="color-azul-bootstrap">Máquina automática para llenar, taponar y cerrar diversas envanses</span> Equipo monoblock para envasado automático</p>
			<ul class="mb-4 font-weight-bold">
				<li>Gabineta construido totalmente en AISI 304</li>
				<li>Permite dosificar tanto líquidos como polvos</li>
				<li>Alimentadores automáticos de tapones, insertos, tapas, etc</li>
				<li>Sistema Pick and Place para colocar tapones o insertos</li>
				<li>Cabeza magnéticos para el cierre de tapas o cabezal de moletas para aluminio</li>
				<li>Pantalla de operación táctil</li>
				<li>Diseñado segun características GMP</li>
				<li>Protocolos de validación FAT/SAT DQ/IQ/OQ según requerimiento</li>
				<li>Hasta 100 envases por hora</li>
			</ul>
			<div class="mb-2">
				<a href="" class="btn btn-primary mr-5">Ficha técnica</a> <a href="" class="btn btn-primary">Consultar</a>
			</div>
		</div>
	</div>
	<div class="wrapper row pb-4 mt-3">
		<div class="col-md-12">
			<h3 class="subtitulo-producto-individual pb-2 color-azul-bootstrap font-weight-bold mb-4">Esquemas</h3>
		</div>
		<div class="col-md-6">
			<img class="img-fluid" src="{{asset('img/ficha_producto/e1.jpg')}}" alt="">
			<p class="pl-3 mt2 font-weight-bold">Liquido</p>
		</div>
		<div class="col-md-6">
			<img class="img-fluid" src="{{asset('img/ficha_producto/e2.jpg')}}" alt="">
			<p class="pl-3 mt2 font-weight-bold">Polvo</p>
		</div>
	</div>
	<div class="wrapper row pb-4 section-prestaciones">
		<div class="col-md-12">
			<h3 class="subtitulo-producto-individual pb-2 color-azul-bootstrap font-weight-bold mb-4">Prestaciones</h3>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2 col-sm-6">
					<img class="img-fluid" src="{{asset('img/ficha_producto/p1.jpg')}}" alt="">
					<p class="font-weight-bold">Líquido <br> vizcoso</p>
				</div>
				<div class="col-md-2 col-sm-6">
					<img class="img-fluid" src="{{asset('img/ficha_producto/p2.jpg')}}" alt="">
					<p class="font-weight-bold">Líquido <br> no vizcoso</p>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper row pb-4 section-prestaciones">
		<div class="col-md-12">
			<h3 class="subtitulo-producto-individual pb-2 color-azul-bootstrap font-weight-bold mb-4">Videos</h3>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<iframe style="max-width: 100%; max-height: 250px; border-radius: 5px;" width="853" height="480" src="https://www.youtube.com/embed/ncSvO22_g8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-4">
					<iframe style="max-width: 100%; max-height: 250px; border-radius: 5px;" width="853" height="480" src="https://www.youtube.com/embed/ncSvO22_g8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div class="col-md-4">
					<iframe style="max-width: 100%; max-height: 250px; border-radius: 5px;" width="853" height="480" src="https://www.youtube.com/embed/ncSvO22_g8E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-4 pb-4" style="background-color: rgba(128, 128, 128, 0.06);">
		<div class="wrapper row pb-4 section-productos-relacionados">
			<div class="col-md-12 mb-3">
				<div class="row">
					<div class="col"><h3 class="font-weight-bold">Productos Relacionados</h3></div>
					<div class="col-md-7 linea oso-mobile-d-none"></div>
					<div class="col-1 d-inline-block mt-2 text-center oso-mobile-d-none"><i class="fas fa-plus icon-pructos-relacionados"></i></div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">		
					<div class="col-md-4">
						<a href="">
							<img class="img-fluid" src="{{asset('img/ficha_producto/r1.jpg')}}" alt="">
							<p class="mt-3">Alimentadores de envase</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="">
							<img class="img-fluid" src="{{asset('img/ficha_producto/r2.jpg')}}" alt="">
							<p class="mt-3">Cerradora automática</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="">
							<img class="img-fluid" src="{{asset('img/ficha_producto/r3.jpg')}}" alt="">
							<p class="mt-3">Etiquetadora</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection