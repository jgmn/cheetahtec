@extends('layouts.main')

@section('content')
<!-- 15. breadcrumb_area -->
<div class="breadcrumb_area" style="background-image: url(/img/19.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Nuestros Empleos</h1>
                <ul class="brc">
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><span>Empleos</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- 15. breadcrumb_area -->

<!-- 18. jobs_tile_area -->
<div class="jobs_tile_area sp">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Desarrollador SAP-ABAP</h4>
                    <img src="{{asset('img/22.jpg')}}">
                    <span>Descripción del empleo</span>
                    <p>Desarrollo de reportes e informes: OO ALV, SmartForms, SAP Scripts y Web Dynpros implementando FM y BAPI siguiendo estándares de programación.</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como desarrollador SAP-ABAP. <br>
                        * Programación Orientada a Objetos en ABAP. <br>
                        * Certificación ABAP deseable. <br> 
                        * Inglés nivel intermedio - avanzado.</p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Desarrollador Web</h4>
                    <img src="{{asset('img/23.jpg')}}">
                    <span>Descripción del empleo</span>
                    <p>Desarrollo de aplicaciones web utilizando nuevas tecnologías.</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como desarrollador web. <br>
                        * Conocimientos sólidos en las tecnologías web: HTML5, CSS, JavaScript, PHP y MySQL.<br>
                        * Desarrollo de API's y Web Services. <br>
                        * Manejo de framework RoR, Laravel o Django. <br>
                        * Dominio del controlador de versiones GIT.</p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Desarrollador de Apps Móviles</h4>
                    <img src="{{asset('img/24.jpg')}}">
                    <span>Descripción del empleo</span>
                    <p>Desarrollo de aplicaciones nativas para Android e iOS.</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como desarrollador de aplicaciones. <br>
                        * Conocimientos sólidos en Java, Swift y React.js. <br>
                        * Dominio de bases de datos SQL y SQLite.<br>
                        * Conocimientos de UX deseable. <br>
                        * Inglés intermedio - avanzado. </p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Desarrollador .NET</h4>
                    <img src="{{asset('img/25.jpg')}}">
                    <span>Descripción del empleo</span>
                    <p>Desarrollador de sistemas con tecnologías .NET</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como desarrollador .NET <br>
                        * Conocimientos en lenguajes C#, VB.Net o ASP.Net. <br>
                        * Dominio de bases de datos SQl. <br>
                        * Patrón MVC.</p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Desarrollador Java</h4>
                    <img src="{{asset('img/26.jpg')}}">
                    <span>Descripción del empleo</span>
                    <p>Desarrollo de aplicaciones empresariales en lenguaje Java.</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como desarrollador Java. <br>
                        * J2EE, Hibernate y Spring MVC. <br>
                        * Dominio de base de datos relacionales. <br>
                        * Automatización de pruebas unitarias con JUnit.</p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 single_job_tile wow fadeInUp">
                <div>
                    <h4>Líder de Proyectos</h4>
                    <img src="{{asset('img/27.jpg')}}"">
                    <span>Descripción del empleo</span>
                    <p>Personal capacitado para trabajar como líder de proyectos de desarrollo de software.</p>
                    <span>Requisitos</span>
                    <p> * Experiencia mínima de 1 año como líder de proyectos. <br>
                        * Facilidad de palabra. <br>
                        * Proactivo. <br>
                        * Responsable. <br>
                    </p>
                    <a href="{{url('/contact')}}" class="button-3">Me interesa</a>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- 18. /jobs_tile_area -->
@endsection