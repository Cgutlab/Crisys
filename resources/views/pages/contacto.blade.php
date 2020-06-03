@extends('layouts.app')
@section('title') Contacto @endsection
@section('content')
<section class="row">
	<div class="col-md-12">
		<iframe class="iframe-map-crisys col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.481805036798!2d-58.29832818517712!3d-34.7434540804235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32dcf160d09e5%3A0x7e770c8ee45b00a!2sCrisys+Ingenieria!5e0!3m2!1ses!2sve!4v1556554259449!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
</section>
<div class="wrapper">
	<section class="row pt-5">
		<div class="col-md-12 mx-auto">
			<div class="row justify-content-center">
				<div class="col-md-3">
					<img class="d-block mx-auto" src="{{asset('img/contacto/icon1.jpg')}}" alt="">
					<p class="text-center pt-3">Corrientes 3651 <span>.</span> Quilmes Oeste, Buenos Aires, Argentina</p>
				</div>
				<div class="col-md-3">
					<img class="d-block mx-auto" src="{{asset('img/contacto/icon2.jpg')}}" alt="">
					<p class="text-center pt-3">(011) 4200-9399</p>
				</div>
				<div class="col-md-3">
					<img class="d-block mx-auto" src="{{asset('img/contacto/icon3.jpg')}}" alt="">
					<p class="text-center pt-3">info@crisys.com.ar</p>
				</div>
			</div>
		</div>
	</section>
	<section class="row pt-5 pb-5">
		<form class="col-md-7 mx-auto form-contacto">
			<div class="row mb-3 justify-content-center">
				<div class="col-md-5 form-group">
					<input type="text" name="nombre" placeholder="Nombre *" required="" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<input type="email" name="email" placeholder="Email *" required="" class="form-control">
				</div>
			</div>
			<div class="row mb-3 justify-content-center">
				<div class="col-md-5 form-group">
					<input type="text" name="telefono" placeholder="Teléfono" class="form-control">
				</div>
				<div class="col-md-5 form-group">
					<input type="text" name="empresa" placeholder="Empresa" class="form-control">
				</div>
			</div>
			<div class="row mb-3 justify-content-center">
				<div class="col-md-10 form-group">
					<textarea name="mensaje" placeholder="Mensaje" class="w-100 form-control" style="min-height: 100px; max-height: 100px;"></textarea>
					<label class="d-block mx-auto mt-4 text-center" for=""><input type="checkbox"> Acepto los términos y condiciones de privacidad</label>
					<div class="text-center mt-3">
						<button type="submit" class="btn btn-primary pl-4 pr-4">Enviar</button>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
@endsection