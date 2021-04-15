@extends('plantilla')
@section('titulo', 'Productos')
@section('activeProductos','id=active')
@section('productosEstilo')
    <link rel="stylesheet" href="{{ URL::asset('./css/productos.css') }}">
@endsection
@section('contenido')
    <div class="container" id="alimentos">
        <!--Granos -->
        <div class="container-fluid" id="granos">
            <div class="row">
                @foreach ($granos as $item)
                    <div class="col-4">
                        <div class="card">
                            <img src="{{$item['imagen']}}"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>{{$item['nombre']}} <span class="titulo-span"><br>{{$item['descripcion']}}</span></h3>
                                <p class="card-text">Precio: {{$item['precio']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection