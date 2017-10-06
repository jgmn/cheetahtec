@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/14.jpg)">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Nuestros Servicios</h1>
				<ul class="brc">
					<li><a href="{{url('/')}}">Inicio</a></li>
					<li><span>Servicios</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 16. work_area -->
<div class="work_area sp">
	<div class="container">
		<div class="row masonry-wrap">
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/abap-factory')}}" class="work_img">
						<img src="{{asset('img/06-2.jpg')}}" class="img-responsive" alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/abap-factory')}}" class="h4">Fábrica de Software SAP-ABAP</a>
						<span>SAP NetWeaver</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/abap-support')}}" class="work_img">
						<img src="{{asset('img/05-2.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/abap-support')}}" class="h4">Soporte SAP-ABAP (AMS)</a>
						<span>SAP NetWeaver</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/web-development')}}" class="work_img">
						<img src="{{asset('img/18.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/web-development')}}" class="h4">Desarrollo Web</a>
						<span>HTML5, CSS, JavaScript, MySQL y PHP</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/mobile-development')}}" class="work_img">
						<img src="{{asset('img/17.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/mobile-develpment')}}" class="h4">Desarrollo Móvil</a>
						<span>Android Studio, Swift 3 y Xcode</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/net-development')}}" class="work_img">
						<img src="{{asset('img/16.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/net-development')}}" class="h4">Desarrollo .NET</a>
						<span>Visual Basic .Net, C# y ASP.Net</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/java-development')}}" class="work_img">
						<img src="{{asset('img/15.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/java-development')}}" class="h4">Desarrollo Java</a>
						<span>Spring MVC, J2EE y JUnit</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/training')}}" class="work_img">
						<img src="{{asset('img/07-2.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/training')}}" class="h4">Capacitación TI</a>
						<span>Cursos de capacitación de personal en nuevas tecnologías impartido por nuestro equipo de desarrolladores con experiencia en el área</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 single_work masonry-grid wow fadeInUp">
				<div>
					<a href="{{url('/services/staffing')}}" class="work_img">
						<img src="{{asset('img/04-2.jpg')}}" class="img-responsive"  alt="">
					</a>
					<div class="work_content">
						<a href="{{url('/services/staffing')}}" class="h4">Staffing</a>
						<span>Disponibilidad de recursos especializados en tecnologías SAP-ABAP, Web, Android, iOS, .NET y Java</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 16. /work_area -->
@endsection