@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/20.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Nuestros Clientes</h1>
				<ul class="brc">
					<li><a href="{{url('/')}}">Inicio</a></li>
					<li><span>Clientes</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 24. client_area -->
<div class="client_area">
	<div class="container">
		<div class="row">
			<div class="col-md-4 single_client wow fadeInUp">
				<img src="{{asset('img/sello_rojo.jpg')}}">
			</div>
			<div class="col-md-4 single_client wow fadeInUp"> 
				<img src="{{asset('img/psf.jpg')}}">
			</div>
			<div class="col-md-4 single_client wow fadeInUp"> 
				<img src="{{asset('img/gonher.jpg')}}">
			</div>
			<div class="col-md-4 single_client wow fadeInUp"> 
				<img src="{{asset('img/agro_lahuerta.jpg')}}">
			</div>
			<div class="col-md-4 single_client wow fadeInUp"> 
				<img src="{{asset('img/star_medica.jpg')}}">
			</div>
			<div class="col-md-4 single_client wow fadeInUp"> 
				<img src="{{asset('img/chocolate_ibarra.jpg')}}">
			</div>
		</div>
	</div>
</div>
<!-- 24. client_area -->
@endsection