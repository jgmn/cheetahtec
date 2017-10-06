@extends('layouts.main')

@section('content')
<!-- Index --> 
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
                                    <a href="#contact" id="start" class="button home_btn">Obtener una cotización gratuita</a>
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
                                    <h1><b>Velocidad</b>, <br><b>eficiencia</b> y <br><b>transparencia</b> son los valores que nos distinguen</h1>
                                    <p>Siempre trabajamos para cumplir con la necesidad más que con el compromiso de nuestros clientes.</p>
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
                                     <h1>Somos un equipo de <b>profesionales</b><br> altamente capacitados</h1>
                                    <p>Potenciamos el talento de nuestro equipo para desarrollar la mejor tecnología para tu empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 02. home_area -->
    
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
                    <a href="{{url('/contact')}}" class="button pbg"><i class="fa fa-long-arrow-right"></i>Contáctanos ahora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 03. cta_area -->
    
    <!-- 04. service_area -->
    <div class="service_area sp sbb">
        <div class="container">
            <div class="row  section_title wow fadeInUp">
                <div class="col-md-6 sth">
                    <h3>Nosotros no comprometemos la calidad.<br> La mejor tecnología está garantizada para tu empresa.</h3>
                </div>
                <div class="col-md-6 sth flex_center">
                    <span class="section_btn text-right">
                        <a href="{{url('services')}}" class="button-2">Descubre nuestros servicios <i class="fa fa-caret-right"></i></a>
                    </span>
                </div>
            </div>
            <div class="row service">
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/04.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Staffing</h4>
                            <p>¿Tienes un proyecto en puerta? ¿Quieres contratar personal externo para dar el apoyo adicional? ¿Deseas enfrentar la carga elevada de trabajo de tu empresa? Este servicio es el adecuado para ti.</p>
                            <a href="{{url('/services/staffing')}}" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/05.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Soporte SAP-ABAP (AMS)</h4>
                            <p>¿No te das abasto con las solicitudes en tu operación diaria para aplicar las mejoras a tus programas SAP-ABAP? Nosotros te proporcionamos a un equipo de trabajo que dará el soporte acorde a tus necesidades.</p>
                            <a href="{{url('/services/abap-support')}}" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/06.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Fábrica de Software SAP-ABAP</h4>
                            <p>¿Tienes requerimientos para la tecnología SAP-ABAP pero no tienes al recurso necesario para atenderlo? ¿Te interesa ahorrar gastos en contratación de recursos de tiempo completo? Este es el servicio que estás buscando.</p>
                            <a href="{{url('/services/abap-factory')}}" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 single_service wow fadeInUp">
                    <div>
                        <div class="service_img">
                            <img src="{{asset('img/07.jpg')}}" class="img-responsive" alt="">
                        </div>
                        <div class="service_content">
                            <h4>Capacitación TI</h4>
                            <p>¿Quieres capacitar a tu personal en las tecnologías de desarrollo como son SAP-ABAP, iOS, Android, .NET, o bien otro curso en particular? Ofrecemos capacitaciones en TI impartidas por nuestro equipo de expertos en el área.</p>
                            <a href="{{url('/services/training')}}" class="button-2">Ver detalles <i class="fa fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 04. service_area -->
    
    <!-- 06. cta_area2 -->
    <div class="cta_area2 overlay-2 wow fadeInUp" style="background-image: url(/img/08.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1>"Te diremos la situación real, te daremos opciones para solucionarlo y marcaremos el camino adecuado para ti"</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- 06. cta_area2 -->
    
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
                        <p>Valoramos a los clientes que confían en nosotros, por eso siempre buscamos trabajar al máximo para entregarte nuestros productos en tiempo y forma.</p>
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
    <!-- 07. step_area -->

    <!-- 10. form_area -->
    <div class="form_area overlay not_sp" style="background-image: url(/img/09.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-md-6 form_h fadeInLeft wow">
                    <div class="form_text text-center">
                        <h4 class="cPrimary">Recibe una cotización gratuita</h4>
                        <h1>En Cheetahtec desarrollamos tecnología para cualquier tipo de negocio</h1>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 form_h">
                    <div id="finish" class="contact_form fadeInRight wow">
                        <form method="" action="">
                            {{ csrf_field() }}
                            <div class="form-group clearfix">
                                <p>Nombre</p>
                                <input type="text" name="name" placeholder="Teclea el nombre" required>
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
                                <button type="submit" class="button"><i class="fa fa-long-arrow-right"></i>Enviar</button><p>
                                <p><i class="fa fa-lock"></i> Tus datos son confidenciales y están protegidos por Cheetahtec.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 10. form_area -->

    <!-- 03. cta_area -->
    <div class="cta_area wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="cta">
                        <h2>En Cheetahtec también ofrecemos oportunidades de empleo. Consulta nuestras vacantes disponibles, contáctanos y únete a nuestro a gran equipo de trabajo.</h2>
                    </div>
                </div>
                <div class="col-md-3 text-right">
                    <a href="{{url('/jobs')}}" class="button pbg"><i class="fa fa-long-arrow-right"></i> Consultar vacantes</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 03. cta_area -->
<!-- Index -->
@endsection    