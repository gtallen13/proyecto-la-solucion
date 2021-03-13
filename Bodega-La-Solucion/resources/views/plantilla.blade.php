<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('./css/header.css') }}">        
        <link rel="stylesheet" href="{{ URL::asset('./css/footer.css') }}">        
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav id="navbar">
            <input id="nav-toggle" type="checkbox">
            <h1 id="titulo">La Solución</h1>
            <ul class="navbarul" id="links">
                <li><button type="button" id="active" class="btn btn-warning"><a href="./index.html">Inicio</a></button></li>
                <li><button type="button" class="btn btn-secondary"><a href="./productos.html">Productos</a></button></li>
                <li><button type="button" class="btn btn-success"><a href="./blog.html">Blog</a></button></li>
                <li><button type="button" class="btn btn-primary"><a href="./acercade.html"> Acerca De</a></button></li>
                <li><button type="button" class="btn btn-danger"><a href="./registro.html">Registrarse</a></button></li>
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
    </body>
</html>