@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/14.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Soporte SAP-ABAP (AMS)</h1>
				<ul class="brc">
					<li><a href="{{url('/')}}">Inicio</a></li>
					<li><a href="{{url('/services')}}">Servicios</a></li>
					<li><span>Soporte SAP-ABAP<span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 20. s_service_area -->
<div class="s_service_area sp">
	<div class="container">
		<div class="row">
			<aside class="col-md-3">
				<div class="widget widget_service wow fadeInUp">
					<ul>
						<li><a href="{{url('services/abap-factory')}}">Fábrica SAP-ABAP</a></li>
						<li class="active"><a href="#">Soporte SAP-ABAP</a></li>
						<li><a href="{{url('services/web-development')}}">Desarrollo Web</a></li>
						<li><a href="{{url('services/mobile-development')}}">Desarrollo Móvil</a></li>
						<li><a href="{{url('services/net-development')}}">Desarrollo .NET</a></li>
						<li><a href="{{url('services/java-development')}}">Desarrollo Java</a></li>
						<li><a href="{{url('services/training')}}">Capacitación TI</a></li>
						<li><a href="{{url('services/staffing')}}">Staffing</a></li>
					</ul>
				</div>
			</aside>
			<div class="col-md-4">
				<div class="service_content wow fadeInUp">
					<h4>Soporte SAP-ABAP (AMS)</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service_content wow fadeInUp">
					<div class="service_gallery clearfix">
						<div class="tile" style="background-image: url(/img/05-2.jpg)"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 20. /s_service_area -->
@endsection