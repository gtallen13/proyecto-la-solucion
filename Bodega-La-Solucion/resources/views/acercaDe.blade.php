@extends('plantilla')
@section('titulo', 'Acerca De')
@section('activeAcercaDe','id=active')
@section('contenido')
    <div class="container">
        <!-- Insert/Drop Grid Row codes below -->
        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="center-container">
                <h1 class="text-center" style="margin-top:50px;">Historia</h1>
                <p class="text-left">
                    Bodega la solución es una empresa creada en el año 2014 por Carlos Amendola, dicha organización
                    tiene
                    un solo fin y es llegar a cumplir con la necesidad del cliente, teniendo la mayoría o todos los
                    productos
                    que él necesite desde una escoba hasta una libra de Arroz, realizamos ventas al por mayor y menor,
                    puedes
                    encontrarnos en Los fuertes.
                </p>
            </div>
        </div>
        <div class="row">
            <div>
                <div class="col-md-6">
                    <div class="center-container">
                        <h1 class="text-center">Mision</h1>
                        <p class="text-left">Cumplir con cada uno de los productos que el cliente busca y mantener
                            siempre precios accesibles para todos </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="center-container">
                        <h1 class="text-center">Vision</h1>
                        <p class="text-left">
                            Queremos llegar a mis clientes y cubrir con más áreas dentro de la isla para así poder
                            llevar calidad de productos y precios accesibles a todos
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
