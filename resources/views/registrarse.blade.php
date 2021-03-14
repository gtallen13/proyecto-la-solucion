@extends('plantilla')
@section('titulo','Registrarse')
@section('activeRegistro','id=active')
@section('contenido')
    <section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <!--No tocar-->
                        <div class="carousel-item img-1 min-vh-100 active"></div>
                        <div class="carousel-item img-2 min-vh-100"></div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 bg-dark d-flex flex-column align-items-end min-vh-100">
                <!--No tocar-->
                <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 mb-auto w-100"></div>
                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                    <h1 class="font-weight-bold mb-4" style="text-align: center; padding-bottom: 20px;">Regístrate</h1>
                    <form class="mb-5">
                        <div class="mb-4">
                            <label for="exampleInputFullName1" class="form-label font-weight-bold">Nombre
                                Completo</label>
                            <input type="password" class="form-control bg-dark-x border-0 mb-2"
                                placeholder="Ingresa tu nombre completo" id="exampleInputPassword1">

                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo
                                Electrónico</label>
                            <input type="email" class="form-control bg-dark-x border-0" id="exampleInputEmail1"
                                placeholder="Ingresa tu correo electrónico" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                            <input type="password" class="form-control bg-dark-x border-0 mb-2"
                                placeholder="Ingresa tu contraseña" id="exampleInputPassword1">

                        </div>
                        <div class="mb-4">
                            <label for="exampleInputPassword2" class="form-label font-weight-bold">Confirmar
                                Contraseña</label>
                            <input type="password" class="form-control bg-dark-x border-0 mb-2"
                                placeholder="Ingresa confirmar contraseña" id="exampleInputPassword1">

                        </div>
                        <button type="submit" class="btn btn-primary w-100">Guardar Informacion</button>
                    </form>
                </div>
                <!--No tocar-->
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                    <p class="d-inline-block mb-0">¿Le gustaria volver al inicio de sesión?</p> <a
                        href="{{url('registro')}}" class="text-light font-weight-bold text-decoration-none">Login</a>
                </div>
            </div>
        </div>
    </section>
@endsection