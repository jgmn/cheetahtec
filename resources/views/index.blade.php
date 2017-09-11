<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cheetahtec</title>
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">	<!-- Bootstrap -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">	<!-- fontawesome -->
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">	<!-- owlcarousel -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">	<!-- magnific -->
    <link href="{{asset('css/hover.min.css')}}" rel="stylesheet">	<!-- hover css -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">	<!-- animate -->
    <!-- custom -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>   <!-- jQuery -->
 
</head>
<body class="home">
<div class="site_preloader flex_center">
    <div class="site_preloader_inner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
</div>
      
<div class="main_wrap">
    <!-- 01. header_area -->
    <header class="header_area">
        <div class="header_top sbb">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <span class="header_info"><b>Cheetahtec</b> es una empresa especializada en servicios de fábrica de software SAP-ABAP.</span>
                    </div>
                    <div class="col-md-8">
                        <ul class="header_link">
                            <li><i class="fa fa-envelope"></i><a href="#">info@cheetahtec.com</a></li>
                            <li><i class="fa fa-phone"></i><a href="#">+52 6672 300743</a></li>
                            <li><i class="fa fa-clock-o"></i><span>Lunes - Viernes, 9am - 7pm</span></li>
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
                        <a href="{{url('/')}}" class="logo">
                            <span>CHEETAHTEC</span>
                        </a>
                    </div>
                    <div class="col-sm-9 menu_col col-xs-6">
                        <nav class="menu-container">
                            <ul class="menu">
                                <li class="current"><a href="{{url('/')}}">Inicio</a></li>
                                <li><a href="about.html">Nosotros</a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">Misión y Visión</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Servicios</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-service-1.html">Desarrollo SAP-ABAP</a></li>
                                        <li><a href="single-service-2.html">Desarrollo Web</a></li>
                                        <li><a href="single-service-3.html">Desarrollo Móvil</a></li>
                                        <li><a href="single-service-4.html">Capacitación TI</a></li>
                                        <li><a href="single-service-5.html">Staffing</a></li>
                                        <!--<li><a href="single-service-6.html">Web Development</a></li>-->
                                        <!--<li><a href="single-service-7.html">Business Management</a></li>-->
                                        <!--<li><a href="single-service-8.html">Digital Marketing</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="jobs.html">Empleos</a>
                                    <ul class="sub-menu">
                                        <li><a href="single-job-1.html">Desarrollador ABAP</a></li>
                                        <li><a href="single-job-2.html">Desarrollador Web</a></li>
                                        <li><a href="single-job-3.html">Desarrollador Móvil</a></li>
                                        <li><a href="single-job-4.html">Líder de Proyectos</a></li>
                                        <!--<li><a href="single-job-5.html">Ver más...</a></li>-->
                                    </ul>
                                </li>
                                <!--<li><a href="#">Pages</a>
                                    <ul class="sub-menu mega-menu">
                                        <li class="menu-column">
                                            <div><a href="index.html">Home</a></div>
                                            <div><a href="about.html">About Us</a></div>
                                            <br>
                                            <div><a href="jobs.html">Jobs</a></div>
                                            <div><a href="get-quote.html">Get A Quote</a></div>
                                            <div><a href="service.html">Our Service</a></div>
                                            <div><a href="single-service.html">Service Details</a></div>
                                        </li>
                                        <li class="menu-column">
                                            <div><a href="works-two-column.html">work / portfolio (style - 1)</a></div>
                                            <div><a href="works-three-column.html">work (style - 2)</a></div>
                                            <div><a href="works-four-column.html">work (style - 3)</a></div>
                                            <div><a href="single-work.html">work Details (Single Portfolio)</a></div>
                                            <br>
                                            <div><a href="blog-two-column.html">Blog (Style - 1)</a></div>
                                            <div><a href="blog-one-column.html">Blog (Style - 2)</a></div>
                                        </li>
                                        <li class="menu-column">
                                            <div><a href="blog-left-sidebar.html">Blog (Style - 3)</a></div>
                                            <div><a href="blog-full-width.html">Blog (Style - 4)</a></div>
                                            <div><a href="blog-single.html">Blog Details (Single Blog)</a></div>
                                            <br>
                                            <div><a href="testimonial.html">Testimonial</a></div>
                                            <div><a href="contact.html">Contact</a></div>
                                            <div><a href="404.html">404/Error Page</a></div>
                                        </li>
                                    </ul>
                                </li>-->

                                <!--<li><a href="blog-two-column.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-one-column.html">Blog (1 Column)</a></li>
                                        <li><a href="blog-two-column.html">Blog (2 Column)</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog (Left Sidebar)</a></li>
                                        <li><a href="blog-full-width.html">Blog (Full Width)</a></li>
                                        <li><a href="blog-single.html">Blog Details (Single)</a></li>
                                    </ul>
                                </li>-->
                                
                                <!--<li><a href="#">Dropdown</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Level A-1</a></li>
                                        <li><a href="#">Level A-2</a></li>
                                        <li><a href="#">Level A-3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Level B-1</a></li>
                                                <li><a href="#">Level B-2</a></li>
                                                <li><a href="#">Level B-3</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Level C-1</a></li>
                                                        <li><a href="#">Level C-2</a></li>
                                                        <li><a href="#">Level C-3</a></li>
                                                        <li><a href="#">Level C-4</a></li>
                                                        <li><a href="#">Level C-5</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Level B-4</a></li>
                                                <li><a href="#">Level B-5</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Level A-4</a></li>
                                        <li><a href="#">Level A-5</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="contact.html">Casos de Éxito</a></li>
                                <li><a href="contact.html">Contacto</a></li>
                            </ul>
                        </nav>
                        <div class="search_icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="search_form">
                            <!--<form action="#">-->
                               <div class="search_close">
                                   <i class="fa fa-close"></i>
                               </div>
                                <input type="search" placeholder="Buscar">
                                <button type="submit">Buscar</button>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- 01. /header_area -->
    
    <!-- 02. home_area -->
    <div class="home_area">
        <div class="slider_preloader flex_center">
           <div class="slider_preloader_inner"></div>
        </div>
        <div class="home_slider">
            <div class="single_slide overlay" style="background-image: url(/img/01.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="home_content">
                                <div class="cell">
                                    <h1>Haz crecer tu <b>empresa</b> con Cheetahtec</h1>
                                    <p>Estamos para ayudarte, contamos con más de 10 años de experiencia en el sector tecnológico. <br>Contáctanos ahora mismo y recibe una cotización totalmente gratuita con uno de nuestros expertos.</p>
                                    <a href="#" class="button hvr-bounce-to-right home_btn">Obtener una cotización gratuita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slide overlay" style="background-image: url(/img/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="home_content">
                                <div class="cell">
                                    <h1><b>Velocidad</b><br><b>Eficiencia</b> y <br><b>Transparencia</b> son los valores que nos distinguen</h1>
                                    <p>Siempre trabajamos para cumplir con la necesidad más que con el compromiso de nuestros clientes.</p>
                                    <!--<a href="#" class="button hvr-bounce-to-right home_btn">Obtener una cotización</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slide overlay" style="background-image: url(/img/03.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="home_content">
                                <div class="cell">
                                    <h1>En Cheetahtec contamos con un equipo de <b>profesionales</b><br>altamente capacitados</h1>
                                    <p>Potenciamos el talento de nuestro equipo para desarrollar la mejor tecnología para tu empresa.</p>
                                    <!--<a href="#" class="button hvr-bounce-to-right home_btn">Get a free consultation</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 02. /home_area -->
    
    
    <!-- 03. cta_area -->
    <div class="cta_area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta">
                        <h2>Incrementa la productividad de tu empresa con las soluciones tecnológicas de Cheetahtec.</h2>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <a href="#" class="button hvr-bounce-to-right pbg"><i class="fa fa-long-arrow-right"></i>Contáctanos ahora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 03. /cta_area -->
    
    <!-- 04. service_area -->
    <div class="service_area sp sbb">
        <div class="container">
            <div class="row  section_title wow fadeInUp">
                <div class="col-md-6 sth">
                    <h3>Nosotros no comprometemos la calidad.<br> La mejor tecnología está garantizada para tu empresa.</h3>
                </div>
                <div class="col-md-6 sth flex_center">
                    <span class="section_btn text-right">
                        <a href="#" class="button-2">Descubre nuestros servicios <i class="fa fa-caret-right"></i></a>
                    </span>
                </div>
            </div>
            <div class="row service">
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/04.jpg')}}" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Staffing</h4>
                            <p>¿Tienes un proyecto en puerta? ¿Quieres contratar personal externo para dar el apoyo adicional? ¿Deseas enfrentar la carga elevada de trabajo de tu empresa? Este servicio es el adecuado para ti.</p>
                            <a href="#" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                            <!--<a href="single-service-1.html" class="button-2">Ver más <i class="fa fa-caret-right"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/05.jpg')}}" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Soporte SAP-ABAP (AMS)</h4>
                            <p>¿No te das abasto con las solicitudes en tu operación diaria para aplicar las mejoras a tus programas SAP-ABAP? Nosotros te proporcionamos a un equipo de trabajo que dará el soporte acorde a tus necesidades.</p>
                            <a href="#" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                            <!--<a href="single-service-2.html" class="button-2">Ver más <i class="fa fa-caret-right"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/06.jpg')}}" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Fábrica de Software SAP-ABAP</h4>
                            <p>¿Tienes requerimientos para la tecnología SAP-ABAP pero no tienes al recurso necesario para atenderlo? ¿Te interesa ahorrar gastos en contratación de recursos de tiempo completo? Este es el servicio que estás buscando.</p>
                            <a href="#" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                            <!--<a href="single-service-3.html" class="button-2">Ver más <i class="fa fa-caret-right"></i></a>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/07.jpg')}}" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Capacitación TI</h4>
                            <p>¿Quieres capacitar a tu personal en las tecnologías de desarrollo como son SAP-ABAP, iOS, Android, .NET, o bien otro curso en particular? Ofrecemos capacitaciones en TI impartidas por nuestro equipo de expertos en el área.</p>
                            <a href="#" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 04. /service_area -->
    
    <!-- 05. about_area -->
    <!--<div class="about_area sp">
        <div class="container">
            <div class="row about">
                <div class="single_about col-sm-6 wow fadeInUp">
                    <div>
                        <div class="about_img abh">
                            <img src="{{asset('img/XX.jpg')}}" alt="">
                        </div>
                        <div class="about_content abh">
                            <h4>About our company</h4>
                            <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window  pulled any. Or raillery if improved landlord to speaking hastened differed one for history.</p>
                            <div>
                                <a href="about.html" class="button-2">Discover more <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_about col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div>
                        <div class="about_img abh">
                            <img src="{{asset('img/XX.jpg')}}" alt="">
                        </div>
                        <div class="about_content abh">
                            <h4>About our histry</h4>
                            <p>It sportsman earnestly ye preserved an on. Moment led family sooner cannot her window  pulled any. Or raillery if improved landlord to speaking hastened differed one for history.</p>
                            <div>
                                <a href="about.html" class="button-2">Discover more <i class="fa fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- 05. /about_area -->
    
    <!-- 06. cta_area2 -->
    <div class="cta_area2 overlay-2 wow fadeInUp" style="background-image: url(/img/08.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1>Te diremos la situación real, te daremos opciones para solucionarlo y marcaremos el camino adecuado para ti</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- 06. /cta_area2 -->
    
    <!-- 07. step_area -->
    <div class="step_area sp"> 
        <div class="container">
            <div class="row  section_title">
                <div class="col-md-6">
                    <h3>Existen muchas empresas desarrolladoras de software. <br> Pero, ¿por qué trabajar con nosotros?</h3>
                </div>
            </div>
            <div class="row step">
                <div class="single_step col-sm-4 wow fadeInUp">
                    <div>
                        <h3>Velocidad</h3>
                        <p>Valoramos a los clientes que confían en Cheetahtec, por eso siempre buscamos trabajar al máximo para entregarte nuestros productos en tiempo y forma.</p>
                    </div>
                </div>
                <div class="single_step col-sm-4 wow fadeInUp" data-wow-delay=".2s">
                    <div>
                        <h3>Eficiencia</h3>
                        <p>Tenemos el equipo y las herramientas para cumplir con la tarea. Aplicando estándares y pensando en el mejor funcionamiento aseguramos la calidad que estás buscando.</p>
                    </div>
                </div>
                <div class="single_step col-sm-4 wow fadeInUp" data-wow-delay=".4s">
                    <div>
                        <h3>Transparencia</h3>
                        <p>Somos una empresa responsable con nuestros clientes y nos gusta estar en constante comunicación con ellos. Te informaremos sobre los avances de tu producto y te mostraremos las mejoras realizadas para que te sientas seguro con nosotros.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 07. /step_area -->
    
    <!-- 08. video_area -->

    <!--<div class="video_area sp grey-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 vdo_h flex_center wow zoomIn" data-wow-duration=".5s"  data-wow-delay=".4s">
                    <div class="video_bg vdo_h overlay-3" style="background-image: url(assets/img/10.jpg)">
                        <span>
                            <a class="video_icon_wrap videoBtn" href="http://www.youtube.com/watch?v=0O2aH4XLbto"> <i class="fa fa-play video_icon"></i> <span>Watch our video</span> </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-6 vdo_h flex_center wow fadeInUp">
                    <div class="benifit video_dsc">
                        <h3>Benefits of working with us</h3>
                        <p>Arrived compass prepare an on as. Reasonable particular on my it in  sympathize. Size now easy eat hand how. Unwilling he departure elsewhere dejection at. Heart large seems may purse means few blind. Exquisite newspaper attending on certainty oh suspicion of. He less do quit evil is.We help companies at every stage of growth, developing custom solutions.</p>
                        <ul class="benifit_list">
                            <li>We help align your brand strategy with key objectives.</li>
                            <li>We help our customers to build better business for future.</li>
                            <li>We design best working path for startups.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- 08. /video_area -->
    
    <!-- 09. faq_area -->
    <!--<div class="faq_area sp">
        <div class="container">
            <div class="col-md-6 faq wow fadeInUp">
                <h3>Frequently Asked Question</h3>
                <div class="accordion_wrap">
                    <dl class="accordion style2">
                        <dt class="active">What type of businsess consultation do you give?</dt>
                        <dd>My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating.</dd>
                        <dt>How does the process work for our business?</dt>
                        <dd>My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating.</dd>
                        <dt>What type of financial limit should I set before starting?</dt>
                        <dd>My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating.</dd>
                    </dl>
                </div>
            </div>
            <div class="col-md-6 according  wow fadeInUp" data-wow-delay=".2s">
                <h3>We are doing smart services</h3>
                <p>Preserved defective offending he daughters on or. Rejoiced prospect yet material  servants out answered men admitted. Sportsmen certainty prevailed suspected am as. Add stairs admire all answer the nearer yet length.</p>
                <div class="panel with-nav-tabs panel-default">
                    <div class="panel-heading">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1default" data-toggle="tab">Financial Advantage</a></li>
                                <li><a href="#tab2default" data-toggle="tab">Business Consultancy</a></li>
                                <li><a href="#tab3default" data-toggle="tab">Startup Problems</a></li>
                            </ul>
                    </div>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab1default">
                                <p>Going as by do known noise he wrote round leave. Warmly put branch people  narrow see. Winding its waiting yet parlors married own feeling. Marry fruit do  spite jokes an times. Whether at it unknown warrant herself winding if. Him same  none name sake had post love. An busy feel form.</p>
                            </div>
                            <div class="tab-pane fade" id="tab2default">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea inventore modi reprehenderit sapiente, similique dolore possimus eos qui delectus repellat excepturi quod est accusantium esse neque expedita tenetur error. Eligendi laborum ea, nesciunt repudiandae qui vitae perspiciatis porro autem vel.</p>
                            </div>
                            <div class="tab-pane fade" id="tab3default">
                                <p> Minus maxime molestiae, suscipit pariatur corporis, accusantium facere hic officia fuga aut nisi odio ut cupiditate exercitationem necessitatibus quibusdam non tempore alias. Eos dicta eum illum repellat provident necessitatibus culpa molestias, tenetur dolore autem rerum repellendus assumenda dolores quam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- 09. /faq_area -->
    
    <!-- 10. form_area -->
    <div class="form_area overlay not_sp" style="background-image: url(/img/09.jpg)" data-stellar-background-ratio="0.2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form_h fadeInLeft wow">
                    <div class="form_text text-center">
                        <h4 class="cPrimary">Recibe una cotización gratuita</h4>
                        <h1>En Cheetahtec desarrollamos tecnología para cualquier tipo de negocio</h1>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 form_h">
                    <div class="contact_form fadeInRight wow">
                        <form action="#">
                            <div class="form-group clearfix">
                                <p>Nombre</p>
                                <input type="text" placeholder="Teclea el nombre" required>
                            </div>
                            <div class="form-group clearfix">
                                <p>Correo electrónico</p>
                                <input type="email" placeholder="Teclea el correo electrónico" required>
                            </div>
                            <div class="form-group clearfix">
                                <p>Teléfono</p>
                                <input type="text" placeholder="Teclea el teléfono" required>
                            </div>
                            <div class="form-group clearfix">
                                <p>Asunto</p>
                                <input type="text" placeholder="Teclea el asunto" required>
                            </div>
                            <div class="form-group clearfix">
                                <p>Mensaje</p>
                                <textarea placeholder="Teclea el mensaje" required></textarea>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="button hvr-bounce-to-right"><i class="fa fa-long-arrow-right"></i>Enviar</button><p>
                                <p><i class="fa fa-lock"></i> Tus datos son confidenciales y están protegidos por Cheetahtec.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 10. /form_area -->
    
    <!-- 11. testimonial_area -->
    <!--<div class="testimonial_area sp wow fadeInUp">
        <div class="container">
            <div class="row  section_title">
                <div class="col-md-6 sth">
                    <h3>We take care of all our customers. <br>See what our customers say about us.</h3>
                </div>
            </div>
            <div class="tst_slider">
                <div class="single_slide">
                    <p>“Looking started he up perhaps against. How  remainder all additions get elsewhere resources.  One missed shy wishes supply design answer  formed. Prevent on present hastily passage an  subject in be.”</p>
                    <h4>Farhan Rizvi</h4>
                    <span class="position">
                        Creative Director, Dhrubok
                    </span>
                </div>
                <div class="single_slide">
                    <p>“Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor  replying she she. Bore tall nay many many time yet less. Doubtful for answered one fat indulged marga sir shutters together.”</p>
                    <h4>Bushra Ahsani</h4>
                    <span class="position">
                        CEO, Home Service
                    </span>
                </div>
                <div class="single_slide">
                    <p>“Looking started he up perhaps against. How  remainder all additions get elsewhere resources.  One missed shy wishes supply design answer  formed. Prevent on present hastily passage an  subject in be.”</p>
                    <h4>David Ramon</h4>
                    <span class="position">
                        Managing DIrector, Start One Ltd.
                    </span>
                </div>
                <div class="single_slide">
                    <p>“Settled opinion how enjoyed greater joy adapted too shy. Now properly surprise expenses interest nor  replying she she. Bore tall nay many many time yet less. Doubtful for answered one fat indulged marga sir shutters together.”</p>
                    <h4>Ohidul Islam</h4>
                    <span class="position">
                        Developer, Dhrubok
                    </span>
                </div>
            </div>
        </div>
    </div>-->
    <!-- 11. /testimonial_area -->
    
    <!-- 12. brand_area -->
    <!--<div class="brand_area grey-bg sp wow fadeInUp">
        <div class="container">
           <div class="row">
               <div class="col-md-12 text-center">
                   <h4>We featured on</h4>
               </div>
           </div>
            <div class="brand_slider">
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/12.jpg" alt="">
                </a>
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/13.jpg" alt="">
                </a>
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/14.jpg" alt="">
                </a>
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/15.jpg" alt="">
                </a>
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/16.jpg" alt="">
                </a>
                <a title="http://example.com" href="#" class="single_brand single_slide">
                    <img src="assets/img/17.jpg" alt="">
                </a>
            </div>
        </div>
    </div>-->
    <!-- 12. /brand_area -->
    
    <!-- 13. news_area -->
    <!--<div class="news_area sp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 single_news wow fadeInUp">
                    <span>
                        <a href="#" class="news_img">
                            <img src="assets/img/18.jpg" alt="">
                        </a>
                        <span class="news_content">
                            <span class="entry-date">
                                25th June, 2016
                            </span>
                            <a class="h3" href="#">How I started my startup with only $100 and got success.</a>
                        </span>
                    </span>
                </div>
                <div class="col-sm-4 single_news wow fadeInUp" data-wow-delay=".2s">
                    <span>
                        <a href="#" class="news_img">
                            <img src="assets/img/19.jpg" alt="">
                        </a>
                        <span class="news_content">
                            <span class="entry-date">
                                25th June, 2016
                            </span>
                            <a class="h3" href="#">How I started my startup with only $100 and got success.</a>
                        </span>
                    </span>
                </div>
                <div class="col-sm-4 single_news wow fadeInUp" data-wow-delay=".4s">
                    <span>
                        <a href="#" class="news_img">
                            <img src="assets/img/20.jpg" alt="">
                        </a>
                        <span class="news_content">
                            <span class="entry-date">
                                25th June, 2016
                            </span>
                            <a class="h3" href="#">How I started my startup with only $100 and got success.</a>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>-->
    <!-- 13. /news_area -->
    
    
    <!-- 03. cta_area -->
    <div class="cta_area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta">
                        <h2>En Cheetahtec también ofrecemos oportunidades de empleo. Consulta nuestras vacantes de trabajo, contáctanos y únete a nuestro gran equipo de trabajo.</h2>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <a href="#" class="button hvr-bounce-to-right pbg"><i class="fa fa-long-arrow-right"></i> Contáctanos ahora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 03. /cta_area -->
    
    <!-- 14. footer -->
    <footer class="footer">
        <div class="footer_top sp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow fadeInUp">
                        <section class="widget widget_text">
                           <a href="#" class="footer_logo">CHEETAHTEC</a>
                            <p>Somos una empresa especializada en servicios de fábrica de software SAP-ABAP.</p>
                            <div class="footer_social">
                                <h4 class="widget-title">Redes sociales</h4>
                                <span>
                                    <a href="#" class="fa fa-facebook"></a>
                                    <a href="#" class="fa fa-twitter"></a>
                                </span>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp">
                        <section class="widget widget_nav_menu">
                            <h4 class="widget-title">Enlaces importantes</h4>
                            <ul>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Empleos</a></li>
                                <li><a href="#">Casos de éxito</a></li>
                                <li><a href="#">Contacto</a></li>
                                <!--<li><a href="#">Payment method</a></li>
                                <li><a href="#">Support center</a></li>
                                <li><a href="#">Frequently Asked Question</a></li>
                                <li><a href="#">Blog</a></li>-->
                            </ul>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeInUp">
                        <section class="widget widget_nav_menu">
                            <h4 class="widget-title">Encuéntranos</h4>
                            <p>Mariano Escobedo #3228, Colonia 21 de Marzo, C.P. 80280, Culiacán, Sinaloa, México.</p>
                            <ul>
                                <li><a href="https://goo.gl/maps/Um9u3FZXj7o" target="_blank"><b>Abrir en Google Maps</b></a></li>
                            </ul>
                        </section>
                    </div>
                    <!--<div class="col-md-3 col-sm-6 wow fadeInUp">
                        <section class="widget widget_nav_menu">
                            <h4 class="widget-title">Important links</h4>
                            <ul>
                                <li><a href="#">Envato</a></li>
                                <li><a href="#">Themeforest</a></li>
                                <li><a href="#">VideoHive</a></li>
                                <li><a href="#">PhotoDune</a></li>
                                <li><a href="#">GraphicRiver</a></li>
                                <li><a href="#">3DOcen</a></li>
                                <li><a href="#">CodeCanayon</a></li>
                                <li><a href="#">Dhrubok</a></li>
                            </ul>
                        </section>
                    </div>-->
                    <!--<div class="col-md-3 col-sm-6 wow fadeInUp">
                        <section class="widget widget_text">
                            <h4 class="widget-title">News Subscription</h4>
                            <p>Subscribe to our newsletter to get all our news in your inbox.</p>
                            <div class="news_letter">
                                <form action="#">
                                    <input type="email" placeholder="Enter your email address">
                                    <button class="button hvr-bounce-to-right">Subscript Now</button>
                                    <p><i class="fa fa-lock"></i> &nbsp; Your email address is 100% safe to us</p>
                                </form>
                            </div>
                        </section>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="footer_btm wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12">
                        <span>&copy; 2017 Cheetahtec. Todos los derechos reservados.</span>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-right">
                        <a href="#" class="team_logo"><img src="{{asset('img/logo2.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- 14. /footer -->
</div>

    <!-- Vendors (All Essential JavaScript plugins) -->
    <script src="{{asset('js/verdor.js')}}"></script>	<!-- Vendor -->
    <script src="{{asset('js/active.js')}}"></script>	<!-- active -->
</body>

</html>
