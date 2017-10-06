@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/21.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Contáctanos</h1>
				<ul class="brc">
					<li><a href="{{url('/')}}">Inicio</a></li>
					<li><span>Contacto<span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 10. form_area -->
<div class="form_area sp single_page">
	<div class="container">
		<div class="row">
			<div class="col-md-5 form_h">
				<div class="contact_form">
					<form method="" action="#">
						<div class="form-group clearfix">
							<p>Nombre</p>
							<input type="text" name="name" placeholder="Teclea el nombre" required autofocus>
						</div>
						<div class="form-group clearfix">
							<p>Correo electrónico</p>
							<input type="email" name="email" placeholder="Teclea el correo electrónico" required>
						</div>
						<div class="form-group clearfix">
							<p>Teléfono</p>
							<input type="text" name="telephone" placeholder="Teclea el teléfono" required>
						</div>
						<div class="form-group clearfix">
							<p>Asunto</p>
							<input type="text" name="subject" placeholder="Teclea el asunto" required>
						</div>
						<div class="form-group clearfix">
							<p>Mensaje</p>
							<textarea name="message" placeholder="Teclea el mensaje" required></textarea>
						</div>
						<div class="form-group clearfix">
							<button type="submit" class="button"><i class="fa fa-long-arrow-right"></i> Enviar</button><p>
							<p><i class="fa fa-lock"></i> Tus datos son confidenciales y están protegidos por Cheetahtec.</p>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 form_h">
				<div class="contact_info">
					<div class="single_contact">
						<p>Atención al Cliente</p>
						<span>Escríbenos para solicitar una cotización, aplicar a nuestras vacantes o bien, para cualquier duda acerca de nuestros servicios. Nosotros te contestaremos en un plazo aproximado de 48h.</span>
					</div>
					<div class="single_contact">
						<p>Llamános</p>
						<span>+52 6672 300743</span>
					</div>
					<div class="single_contact">
						<p>Correo Electrónico</p>
						<span>info@cheetahtec.com</span>
					</div>
					<div class="single_contact">
						<p>Visítanos</p>
						<span><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3622.6252826976493!2d-107.3633445!3d24.7740338!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd71ff6a613d9%3A0x93472b7d6b74c9af!2sMariano+Escobedo+3228%2C+21+de+Marzo%2C+80280+Culiac%C3%A1n+Rosales%2C+Sin.!5e0!3m2!1ses!2smx!4v1506126299665" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 10. /form_area -->
@endsection