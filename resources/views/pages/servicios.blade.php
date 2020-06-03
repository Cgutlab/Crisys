@extends('layouts.app')
@section('title')
	Servicios
@endsection
@section('content')
<div class="content-text-hero mb-3">
	<div class="wrapper row flex-column justify-content-end hero-content-text-height">
		<h1 class="hero-content-text">Servicios</h1>
	</div>
</div>
<div class="wrapper row pt-3 pb-3 font-weight-bold text-left">
	<div class="col-md-10 mx-auto mb-5">
		<p class="text-center font-weight-bold">
			El conocimiento técnico especializado acerca de las prestaciones y exigencias de la industria del envasado, garantiza el rendimiento de máquinas a las cuales les hemos realizado mantenimiento, adecuación y/ o reingeniería. El mismo conocimiento se aplica en la fabricación de repuestos y formatos adicionales de equipos de envasado.
		</p>
	</div>
	<div class="w-100"></div>
	<div class="col-md-6">
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i1.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Asesoramineto personalizado</h4>
				<p style="color: #0009;">Brindamos el servicio de Atención y Asesoramiento personalizado. Nuestro equipo de profesionales trabajan en propuestas que generen valor y la mejor relacion costo-beneficio.</p>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i3.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Post-Venta y Garantía</h4>
				<p style="color: #0009;">GR. MAQ. considera fundamental mantener los lazos con sus clientes, basados en la confianza y la excelencia en servicio. Contamos con un servicio de Post-Venta, Garantía y Servicio Técnico especializados.</p>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i5.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Respuestas y Piezas Especiales</h4>
				<p style="color: #0009;">Realizamos, desarrollamos y fabricamos repuestos y piezas especiales para la maquinaria propia y de otras marcas. Para más información consulte por nuestras piezas y accesorios para su equipo.</p>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i2.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Visitas a Planta</h4>
				<p style="color: #0009;">Contamos con unidades de visitas a planta. Además realizamos confeccionamiento de proyectos y layout. Brindando la entrega de planos eléctricos y manual instructivo para el operario.</p>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i4.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Instalacion y Puesta en Marcha</h4>
				<p style="color: #0009;">Contamos con un equipo de trabajo altamente capacitado, dispuesto a brindar el mejor servicio de instalación y puesta en marcha de nuestro catálogo de máquinas y equipos.</p>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-2 icon-center-mobile">
				<img src="{{asset('img/servicios/i6.jpg')}}" alt="">
			</div>
			<div class="col-md-9 ml-4">
				<h4 class="font-weight-bold mb-3">Diseño y Fabricación a Medida</h4>
				<p style="color: #0009;">Consulte por nuestro servicio especializado de maquinaria, adaptada a las necesidades específicas de nuestros clientes.</p>
			</div>
		</div>
	</div>
</div>
<div style="background-color: rgba(128, 128, 128, 0.06);">
	<div class="wrapper row pt-5 pb-5">
		<div class="col-md-12 mb-3"><h2 class="font-weight-bold" style="color: #bcb6b6;">Post Venta</h2></div>
		<div class="col-md-10 mx-auto">
			<p class="text-center font-weight-bold pb-5 pt-3" style="color: #0009;">Brindamos propuestas que generen valor y la mejor relación costo-beneficio. Nuestro equipo de profesionales está disponible para brindar una atención personalizada y una gestión técnica eficaz.</p>
		</div>
		<div class="col-md-9 mx-auto">
			<div class="row">
				<div class="col-md-4">
					<img class="d-block mx-auto" src="{{asset('img/servicios/ps1.jpg')}}" alt="">
					<p class="text-center color-azul-bootstrap pt-3 pb-3 font-weight-bold"><a href="">Atención Personalizada</a></p>
				</div>
				<div class="col-md-4">
					<img class="d-block mx-auto" src="{{asset('img/servicios/ps2.png')}}" alt="">
					<p class="text-center color-azul-bootstrap pt-3 pb-3 font-weight-bold"><a href="">Respuesta Inmediata</a></p>
				</div>
				<div class="col-md-4">
					<img class="d-block mx-auto" src="{{asset('img/servicios/ps3.png')}}" alt="">
					<p class="text-center color-azul-bootstrap pt-3 pb-3 font-weight-bold"><a href="">Asistencia 24 hs</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection