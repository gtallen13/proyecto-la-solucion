<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('./css/acercaDe.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('./css/contactanos.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('./css/header.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('./css/footer.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('./css/index.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('./css/registro.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('./css/registrarse.css') }}">
        @yield('productosEstilo')
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav id="navbar">
            <input id="nav-toggle" type="checkbox">
            <h1 id="titulo">La Solución</h1>
            <ul class="navbarul" id="links">
                <li><button type="button" @yield('activeInicio') class="btn btn-warning"><a href="/">Inicio</a></button></li>
                <li><button type="button" @yield('activeProductos') class="btn btn-secondary"><a href="{{url('productos')}}">Productos</a></button></li>
                <li><button type="button" @yield('activeBlog') class="btn btn-success"><a href="#">Blog</a></button></li>
                <li><button type="button" @yield('activeAcercaDe') class="btn btn-primary"><a href="{{url('acercaDe')}}"> Acerca De</a></button></li>
                <li><button type="button" @yield('activeRegistro') class="btn btn-danger"><a href="{{url('registro')}}">Registrarse</a></button></li>
            </ul>
            <label for="nav-toggle" class="icon-burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </label>
        </nav>
        @yield('contenido')
        <!-- Footer -->
        <footer class=" text-center footer">
            <!-- Grid container -->
            <div class="container p-4 ">


                <!-- Section: Text -->
                <section class="mb-4 text-decoration">
                    <h1>Bodega La Solución</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                        distinctio earum repellat quaerat voluptatibus placeat nam,
                        commodi optio pariatur est quia magnam eum harum corrupti dicta,
                        aliquam sequi voluptate quas.
                    </p>
                </section>

                <section class="">
                    <!--Grid row-->
                    <div class="row text-decoration">
                        <!--Columna para -->
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Direccion</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <p>Los fuentes, Roatan</p>
                                </li>

                            </ul>
                        </div>
                        <!--Columnas para el telefono-->
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Telefono</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <p>+504 2222-4444</p>
                                </li>

                            </ul>
                        </div>

                        <!-- Section: Social media -->
                        <section class="mb-4">
                            <!-- Facebook -->
                            <a class="btn icon-facebook btn-floating m-1">
                                <i class="fab fa-facebook-f"></i></a>
                            <!-- Google -->
                            <a class="btn icon-google btn-floating m-1" href="#!" role="button"><i
                                    class="fab fa-google"></i></a>
                            <!-- Instagram -->
                            <a class="btn icon-instagram btn-floating m-1" href="#!" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </section>
                    </div>
                </section>

            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2021 Copyright
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    </body>
</html>