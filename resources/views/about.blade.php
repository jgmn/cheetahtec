@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/10.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Nosotros</h1>
                <ul class="brc">
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><span>Nosotros</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 05. about_area -->
<div class="about_area sp">
    <div class="container">
        <div class="row about_top spb wow fadeInUp">
            <div class="col-md-6">
                <div class="about_top_img">
                    <img src="{{asset('img/11.jpg')}}" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about_top_content">
                    <h3>¿Quiénes somos?</h3>
                    <p>En Cheetahtec somos un empresa especializada en servicios de fábrica de software SAP-ABAP. Tenemos como objetivos:</p>
                    <ul>
                        <li>Ofrecer a nuestros clientes el acceso a un equipo de desarrollo de consultores de ABAP con probada experiencia, que le permitirán reducir costos y mejorar la productividad de su empresa. </li>
                        <li> Estar muy de cerca con las personas involucradas en cada asignación, proponiendo mejoras y/o soluciones a los problemas emergentes.</li>
                        <li>Emplear las herramientas a su disposición para realizar el mejor trabajo, en tiempo y forma con la rapidez que nos caracteriza.</li>
                    </ul>               
                </div>
            </div>
        </div>
        <div class="row about">
            <div class="single_about col-sm-6">
                <div>
                    <div class="about_img abh wow fadeInUp">
                        <img src="{{asset('img/12.jpg')}}" class="img-responsive">
                    </div>
                    <div class="about_content abh">
                        <h4>Misión</h4>
                        <p>Satisfacer las necesidades de mejora y/o creación de los sistemas de información de nuestros clientes, estableciendo así una relación de larga duración, basada en la confianza y el compromiso que nos caracteriza.</p>
                    </div>
                </div>
            </div>
            <div class="single_about col-sm-6 wow fadeInUp">
                <div>
                    <div class="about_img abh">
                        <img src="{{asset('img/13.jpg')}}" class="img-responsive">
                    </div>
                    <div class="about_content abh">
                        <h4>Visión</h4>
                        <p>Ser una empresa competitiva en el mercado, siempre buscando mejorar el nivel de calidad y profesionalismo de nuestros servicios, aplicando valores como la honestidad, respeto, sinceridad, transparencia y proactividad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 05. about_area -->
@endsection