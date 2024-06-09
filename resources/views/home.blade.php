@extends('layouts.app')

@section('content')

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

<div class="bg-white">
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5" id="inicio">
            <div class="col-lg-6 text-center text-lg-left">
                <div class="d-inline-flex align-items-center">
                    <p class="mr-2 mb-2 mb-lg-0 text-white">Horario:</p>
                    <span class="mb-2 mb-lg-0 text-white">8:00AM - 9:00PM</span>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <p class="m-0 mr-1 text-white">Siguenos:</p>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize font-italic"><span class="text-primary">Sos</span>efi</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Domicilio</h6>
                        <p class="m-0">Tierra de Tules 180, Col, Terralta</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Envianos un correo:</h6>
                        <p class="m-0">vcisneros@sosefi.mx</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center pl-3">
                        <h6>Contacto:</h6>
                        <p class="m-0">3310058710</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="#inicio" class="nav-item nav-link active">Incio</a>
                    <a href="#info" class="nav-item nav-link">Acerca de nosotros</a>
                    <a href="#services" class="nav-item nav-link">Servicios</a>
                    <a href="#" class="nav-item nav-link">Productos</a>
                    <a href="#contact" class="nav-item nav-link">Contactanos</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="blog-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carrusel1.1.webp" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0">Tu seguridad es nuestra recompensa</h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">El mejor servicio de seguridad</h4>
                        <a href="#" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Contactanos</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carrusel2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-primary m-0">Tu seguridad es nuestra recompensa.</h4>
                        <h4 class="display-4 m-0 mt-2 mt-md-3 text-white">Contamos con lo más nuevo en el mercado</h4>
                        <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Contactanos</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <div class="btn btn-primary rounded-circle" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    {{-- <!-- Features Start -->
    <div class="container-fluid py-5 py-lg-0 feature">
        <div class="row py-5 py-lg-0">
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-policeman display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Camaras de seguridad</h5>
                        <p class="m-0">Realizamos instalaciones de camaras de seguridad y equipo para su monitoreo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-helmet display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Cercas electricas</h5>
                        <p class="m-0">Contamos con el servicio de isntalación y venta de cercas de seguridad alrededor de tu hogar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center px-5">
                    <i class="flaticon-surveillance display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Videoportero</h5>
                        <p class="m-0">Para tu seguridad y comodidad, el videoportero hará el ingreso a tu hogar más comodo, tambien contamos con este servicio en conjuntos de viviendas más grandes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End --> --}}

    <!-- Services Start -->
    <div class="container pt-5" id="services">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Nuestros servicios</h5>
            <h1 class="m-0">Tecnologías de calidad.</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/camaraSeguridad.jfif" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Camaras de seguridad</h6>
                    </div>
                    <div class="card-footer">
                        Realizamos instalaciones de camaras de seguridad y equipo para su monitoreo.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/cercaElectrica.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-home font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Cercas electricas</h6>
                    </div>
                    <div class="card-footer">
                        Contamos con el servicio de instalación y venta de cercas de seguridad alrededor de tu hogar.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/asesoria.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Asesoramiento</h6>
                    </div>
                    <div class="card-footer">
                        Si trabajas en un entorno similar, podemos ofrecer asesoria en las tecnología que utilizamos.    
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/videoPort.jfif" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-factory font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Videoporteros</h6>
                    </div>
                    <div class="card-footer">
                        Para tu seguridad y comodidad, el videoportero hará el ingreso a tu hogar más comodo, tambien contamos con este servicio en conjuntos de viviendas más grandes.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/controlA.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-transportation font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Accesos de seguridad.</h6>
                    </div>
                    <div class="card-footer">
                        Si bucas un control de accesos, somos tu solución, contamos con servicio de instalación de controles de acceso para todo tipo de empresas.
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Services End -->

    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;" id="info">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">Acerca de nosotros</h5>
                <h1 class="mb-4">10 años de experiencia</h1>
                <p>Somos una empresa enfocada en la seguridad del hogar, contamos con la venta de dispositivos de seguridad así como instalación de los mismos. Para una cotización:</p>
                <a href="" class="btn btn-lg px-4 btn-primary">Contactanos</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    


    {{-- <!-- Facts Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">250</h4>
                <h6 class="text-white m-0">Our Staff</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">1500</h4>
                <h6 class="text-white m-0">Happy Client</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-shield-alt mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">10000</h4>
                <h6 class="text-white m-0">Project Complete</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-award mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">25</h4>
                <h6 class="text-white m-0">Award Winning</h6>
            </div>
        </div>
    </div>
    <!-- Facts End --> --}}


    {{-- <!-- Features Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <h5 class="text-primary mb-3">Why Choose Us?</h5>
                <h1 class="mb-4">Top Level Security</h1>
                <img class="img-thumbnail mb-4 p-3" src="img/feature.jpg" alt="Image">
                <p>
                    Ea tempor ipsum kasd clita. Sea diam amet et rebum sit stet, vero sea est diam et sit ea sit et ea no
                </p>
                <a href="" class="btn btn-lg btn-primary mt-2">Learn More</a>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-policeman font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">High Security</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-bodyguard font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Trained Guards</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-approved font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Govt Approved</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-medal font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Award Winning</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-helmet font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Latest Equipments</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-surveillance font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">24/7 Support</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End --> --}}


    <!-- Subscribe Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center" id="contact">
        <h1 class="text-white font-weight-bold mt-5 mb-3">Contactanos:</h1>
        <p class="text-white mb-4">Si necesitas atención personalizada envianos un correo:</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <textarea name="correoE" id="correoE" cols="30" rows="10" style="width: 100%; height: 40%; resize:none " >
                </textarea>
                <br>
                <div style="flex: auto; align-items: center; justify-content: center; padding: 30px">
                    <button class="btn envio" type="submit" style="background-color: black; color:#f6f6f6; padding: 10px; width: 140px; border-radius: 5px">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    {{-- <!-- Team Start -->
    <div class="container pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Security Officers</h5>
            <h1 class="m-0">Meet Our Security Officers</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-2.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-3.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-4.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}


    {{-- <!-- Testimonial Start -->
    <div class="container-fluid my-5 p-0 py-5" style="background: #f6f6f6;">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h5 class="text-primary mb-3">Testimonial</h5>
                <h1 class="m-0">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-1.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-2.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-3.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="img/testimonial-4.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}


    {{-- <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Recent Blog</h5>
            <h1 class="m-0">Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/blog-1.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/blog-2.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="img/blog-3.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End --> --}}


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize font-italic text-white"><span class="text-primary">Sos</span>efi</h1>
                <p class="m-0">Soluciones en Seguridad Fisica. Somos una empresa enfocada en la seguridad en el hogar.</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Menu</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#inicio"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-white mb-2" href="#info"><i class="fa fa-angle-right mr-2"></i>Acerca de nosotros</a>
                            <a class="text-white mb-2" href="#services"><i class="fa fa-angle-right mr-2"></i>Nuestros servicios</a>
                            <a class="text-white" href="#contact"><i class="fa fa-angle-right mr-2"></i>Contactanos</a>
                        </div>
                    </div>
                    {{-- <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Popular Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div> --}}
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Encuentranos en:</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Tierra de Tules 180, Col, Terralta</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>3310058710</p>
                        <p><i class="fa fa-envelope mr-2"></i>vcisneros@sosefi.mx</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Sosefi</a>. Derechos reservados. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Avisos de privacidad</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terminos y condiciones</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary border back-to-top"><i class="fa fa-angle-double-up"></i></a>

</div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


@endsection
