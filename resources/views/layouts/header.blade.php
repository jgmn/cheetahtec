<!-- 01. header -->
<header class="header_area">
    <div class="header_top sbb">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="header_info"><span>Somos una empresa especializada en servicios de fábrica de software SAP-ABAP.</span>
                </div>
                <div class="col-md-8">
                    <ul class="header_link">
                        <li><i class="fa fa-envelope"></i><a href="#email">info@cheetahtec.com</a></li>
                        <li><i class="fa fa-phone"></i><a href="#tel">+52 6672 300743</a></li>
                        <li><i class="fa fa-clock-o"></i><span>Lunes - Viernes, 9am - 7pm</span></li>
                        <li><a href="#es"><img src="{{asset('img/es.jpg')}}"> <span><b>ES</b></span></a></li>
                        <li><a href="#login" class="button-4" style="text-decoration: none; color: #fff" data-toggle="modal" data-target="#myModal">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-anchor"></div>
    <div class="header_btm">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <a href="{{asset('/')}}" class="logo"><img src="{{asset('img/logo.png')}}" class="img-responsive" width="120"></a>
                </div>
                <div class="col-sm-9 menu_col col-xs-6">
                    <nav class="menu-container">
                        <ul class="menu">
                            <li class="current"><a href="{{url('/')}}">Inicio</a></li>
                            <li><a href="{{url('/about')}}">Nosotros</a></li>
                            <li><a href="{{url('/services')}}">Servicios</a>
                                <ul class="sub-menu">
                                    <li><a href="{{url('/services/abap-factory')}}">Fábrica SAP-ABAP</a></li>
                                    <li><a href="{{url('/services/abap-support')}}">Soporte SAP-ABAP</a></li>
                                    <li><a href="{{url('/services/web-development')}}">Desarrollo Web</a></li>
                                    <li><a href="{{url('/services/mobile-development')}}">Desarrollo Móvil</a></li>
                                    <li><a href="{{url('/services/net-development')}}">Desarrollo .NET</a></li>
                                    <li><a href="{{url('/services/java-development')}}">Desarrollo Java</a></li>
                                    <li><a href="{{url('/services/training')}}">Capacitación TI</a></li>
                                    <li><a href="{{url('/services/staffing')}}">Staffing</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/jobs')}}">Empleos</a></li>
                            <li><a href="{{url('/clients')}}">Clientes</a></li>
                            <li><a href="{{url('/contact')}}">Contacto</a></li>
                        </ul>
                    </nav>
                    <div class="search_icon">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="search_form">
                        <form action="#">
                           <div class="search_close">
                               <i class="fa fa-close"></i>
                           </div>
                           <input type="search" placeholder="Buscar">
                           <button type="submit">Buscar</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </header>
<!-- 01. header -->

@include('layouts.login')
