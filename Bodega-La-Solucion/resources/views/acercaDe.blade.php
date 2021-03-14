@extends('plantilla')
@section('titulo', 'Acerca De')
@section('activeAcercaDe','id=active')
@section('contenido')
    <div class="outer-container">
        <div class="about-section">
            <h2>Acerca de Nosotros</h2>
        </div>
        <div class="inner-container">
            <h1>Bodega La Solución</h1>
            <h3>Historia</h2>
            <p class="text">
                Bodega la solución es una empresa creada en el año 2014 por Carlos Amendola, dicha organización
                tiene
                un solo fin y es llegar a cumplir con la necesidad del cliente, teniendo la mayoría o todos los
                productos que él necesite desde una escoba hasta una libra de arroz, realizamos ventas al por mayor y
                menor,
                puedes encontrarnos en Los fuertes.
            </p>
            <h3>Visión</h3>
            <p class="text">
                Queremos llegar a más clientes y cubrir con más áreas dentro de la isla para así poder
                llevar calidad de productos y precios accesibles a todos.
            </p>
            <h3>Misión</h3>
            <p class="text">
                Cumplir con cada uno de los productos que el cliente busca y mantener
                siempre precios accesibles para todos.
            </p>
        </div>
    </div>
  
    <div class="outer-container">

    <div class="inner-container">

            <div class="col-md-12">
                <div class="well well-sm">
                    <form class="form-vertical" method="post" action={{route('acercaDe')}}>
                        <fieldset>
                            <legend class="text-center header">Contactanos</legend>
    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="fname" name="name" type="text" placeholder="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <input id="email" name="email" type="text" placeholder="Email " class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <br>
                                    <textarea class="form-control" id="message" name="message" placeholder="Escribe tu mensaje aqui" rows="7"></textarea>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>          
        <div class="about-section">
            <h2>Contactanos</h2>
        </div>
    </div>

</div>
@endsection
