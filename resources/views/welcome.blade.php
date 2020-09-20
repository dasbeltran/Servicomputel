<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ServiComputel</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
    <link rel="stylesheet" href="{{asset('iconos/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
</head>

<body>
    <header>
        <div class="container-fluid px-5 shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top px-5">
                <a class="navbar-brand" href="#">Servicomputel <li class="fas fa-wifi"></li></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Planes de Internet</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Atencion al cliente
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Solicitud plan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Lineas de Atencion</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Herramientas
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Test Velocidad</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Consultas</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contactanos </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <section class="cabecera">
        <div class="banner container-fluid">
            <h5 class="mb-2">#ServiComputel</h5>
            <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
            <h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h4>
            <h4>Lorem ipsum dolor.</h4>
            <a class="btn btn-outline-light mt-4" href="">Solicitar Servicio</a>
        </div>
    </section>


    <section class="descripcion">
        <div class="container-fluid ">
            <div class="row">
                <div class="descripciones col-lg-4">
                    <div class="imgdes mt-3">
                        <img src="{{asset('img/ecommerce.png')}}" width="70" height="70" alt="">
                    </div>
                    <div class="textdes ml-4">
                        <h6 class="titulodes">Titulo Descripcion</h6>
                        <p class="condestex">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="descripciones col-lg-4">
                    <div class="imgdes mt-3">
                        <img src="{{asset('img/servicios-de-alojamiento.png')}}" width="70" height="70" alt="">
                    </div>
                    <div class="textdes ml-4">
                        <h6 class="titulodes">Titulo Descripcion</h6>
                        <p class="condestex">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="descripciones col-lg-4">
                    <div class="imgdes mt-3">
                        <img src="{{asset('img/servicios-globales.png')}}" width="70" height="70" alt="">
                    </div>
                    <div class="textdes ml-4">
                        <h6 class="titulodes">Titulo Descripcion</h6>
                        <p class="condestex">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid bg-light py-5">
        <div class="herramientas ">
            <div class="row justify-content-center  contenedor-herramienta ">
                <div class="col-md-4  col-8 tarjeta-herramienta shadow-lg p-0 bg-white mx-md-5">
                    <div class=" cabecera-herramienta p-4 text-white bg-info">
                        <p class="h5">Test de Velocidad</p>
                        <p>Pruebe el ancho de banda de su conexión a Internet</p>
                    </div>
                    <div class="text-center p-2">
                        <a href="" class="text-center">Ir ahora</a>
                    </div>


                </div>
                <div class="col-md-4  col-8 tarjeta-herramienta shadow-lg p-0  bg-white mx-md-5">
                    <div class=" cabecera-herramienta p-4 text-white bg-info">
                        <p class="h5">Consultar Proceso de solicitud</p>
                        <p>Consulte su estado de su solicitud</p>
                    </div>
                    <div class="text-center p-2">
                        <a href="" class="text-center ">Ir ahora</a>
                    </div>


                </div>


            </div>
        </div>

    </div>

    <div class="container-fluid mt-5 mb-3">
        <div class="planes">
            <h2 class="text-center">Planes de Internet</h2>
            <div class="row justify-content-center text-center">
                <div class="col-md-3 col-8 plan py-4 px-2">
                    <h3>Basico</h3>
                    <p class="precio h4">$40.000</p>
                    <p>Navegacion Ilimitada</p>
                    <p>Velocidad de 4MB</p>
                    <div>
                        <a href="" class="">Solicitar Plan</a>
                    </div>
                </div>
                <div class="col-md-3 col-8 plan py-4 px-2">
                    <h3>Recomendado</h3>
                    <p class="precio h4">$50.000</p>
                    <p>Navegacion Ilimitada</p>
                    <p>Velocidad de 6MB</p>
                    <div>
                        <a href="" class="">Solicitar Plan</a>
                    </div>
                </div>
                <div class="col-md-3 col-8 plan py-4 px-2">
                    <h3>Avanzado</h3>
                    <p class="precio h4">$80.000</p>
                    <p>Navegacion Ilimitada</p>
                    <p>Velocidad de 8MB</p>
                    <div>
                        <a href="" class="">Solicitar Plan</a>
                    </div>
                </div>

            </div>


        </div>
    </div>


    <section class="contacto">

    </section>
</body>

</html>