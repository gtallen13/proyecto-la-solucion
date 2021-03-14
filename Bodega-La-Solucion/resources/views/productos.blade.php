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
            <h2>Granos</h2>  
            <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://www.seas.es/blog/wp-content/uploads/2013/01/azucar368.png"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Azucar <span class="titulo-span"><br>Por libra</span></h3>
                                <p class="card-text">Precio: L. 10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://lh3.googleusercontent.com/proxy/XDEji_3CWv4Qv-f849Ui03CVQqIGOJ8EnK_NP2ssQys6C56-HLD6LDaiD0UU6LxqY4RLaBiJoApzp2DDqL4QvxG2HyMnUUB9khg0IxBekw6YHFg5YS_3Z73gWoxwrMZaB-8dRasgh8A"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Arroz Progreso <span class="titulo-span"><br>Presentaciones varias</span></h3>
                                <p class="card-text">Precio: L. 13</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://www.teleprogreso.tv/wp-content/uploads/2020/02/ARROZ-EN-QUINTALES.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Arroz Por libra<span class="titulo-span"><br></span></h3>
                                <p class="card-text">Precio: L. 11</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://media.istockphoto.com/photos/sack-of-red-dry-kidney-beans-at-traditional-vegetable-market-picture-id1150073830?k=6&m=1150073830&s=170667a&w=0&h=oIL2jlZ41DskDoE5-A9sOc57jLIsFE2Mwtm1-F4N9zw="
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Frijoles</h3>
                                <p class="card-text">Precio: L. 14/libra</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL35N4quVVk1chtqeZKK6gza9k3gqsqo355g&usqp=CAU"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Maiz en lata</h3>
                                <p class="card-text">Precio: L. 25</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://images-na.ssl-images-amazon.com/images/I/81hcZkJy%2BYL._SX425_PIbundle-12,TopRight,0,0_AA425SH20_.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Verduras Mixtas en lata</h3>
                                <p class="card-text">Precio: L. 35</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Frutas -->
            <div class="container-fluid" id="frutas">
                <h2>Frutas</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://modernfarmer.com/wp-content/uploads/2018/02/supermarket-food-waste-bananas-1200x930.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Bananos <span class="titulo-span"><br>Por libra</span></h3>
                                <p class="card-text">Precio: L. 9</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://i.ytimg.com/vi/GGXwy0_fF24/maxresdefault.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Tomates <span class="titulo-span"><br>Por libra</span></h3>
                                <p class="card-text">Precio: L. 15/libra</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2018/09/14181939/Sancion-en-supermercado-cubano-por-venta-de-15-mil-manzanas-a-un-cliente.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Manzanas <span class="titulo-span"><br></span></h3>
                                <p class="card-text">Precio: L. 15</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://thumbs.dreamstime.com/b/sand%C3%ADa-y-melocotones-en-venta-un-supermercado-rusia-verduras-frutas-el-contador-152150372.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Sandias</h3>
                                <p class="card-text">Precio: L. 55</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://tiempo.hn/wp-content/uploads/2020/08/peras-1.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Peras</h3>
                                <p class="card-text">Precio: L. 15</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://animalgourmet.com/wp-content/uploads/2019/06/apricots-3433818_1920.jpg"
                                class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Duraznos</h3>
                                <p class="card-text">Precio: L. 14/libra</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Verduras -->
        <div class="container-fluid" id="frutas">
            <h2>Verduras</h2>           
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="https://ep01.epimg.net/elpais/imagenes/2020/04/08/buenavida/1586339161_885331_1586339382_noticia_normal.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Pepinos <span class="titulo-span"></span></h3>
                            <p class="card-text">Precio: L. 15</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://www.soycorredor.es/uploads/s1/42/74/15/5c18c13a0ce694154c8b4579-nutricion-en-el-running-la-lechuga.jpeg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Lechuga <span class="titulo-span"><br></span></h3>
                            <p class="card-text">Precio: L. 15/libra</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://img.vixdata.io/pd/jpg-large/es/sites/default/files/imj/vivirsalud/4/4-sorprendentes-beneficios-del-repollo-para-la-salud-1.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Repollo <span class="titulo-span"><br></span></h3>
                            <p class="card-text">Precio: L. 35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="https://www.mercadoabastospanama.com/images/thumbs/0000070_culantro-mazo_550.jpeg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Culantro</h3>
                            <p class="card-text">Precio: L. 15/mazo</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://latienditacr.com/wp-content/uploads/2020/06/Chile-dulce.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Chile Dulce</h3>
                            <p class="card-text">Precio: L. 12.50</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/11/es-bueno-comer-chile-habanero.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Chile Cabro</h3>
                            <p class="card-text">Precio: L. 3 c/u</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Bebidas-->
    <div class="container" id="bebidas">
        <h2>Bebidas</h2>
        <h3>Refrescos</h3>
        
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="https://i1.wp.com/www.capitaledomex.com.mx/wp-content/uploads/2020/10/LYNXMPEG9L0UK.jpg?fit=768%2C555&ssl=1"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Coca Cola <span class="titulo-span"><br>(Tamaños varios)</span></h3>
                        <p class="card-text">Precio: L. 15</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://thumbs.dreamstime.com/b/el-jugo-de-pepsi-cola-bebe-en-venta-estante-del-supermercado-136503253.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>PEPSI <span class="titulo-span"><br>(Tamaños varios)</span></h3>
                        <p class="card-text">Precio: L. 15</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://www.esan.edu.pe/apuntes-empresariales/2016/11/14/bigcola_twitter.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Big Cola <span class="titulo-span"><br>(Tamaños varios)</span></h3>
                        <p class="card-text">Precio: L.10</p>
                    </div>
                </div>
            </div>
        </div>
        <h3>Jugos</h3>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="https://i.ytimg.com/vi/1IxussheTOo/maxresdefault.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Jugos Leyde <span class="titulo-span"><br>(Sabores varios)</span></h3>
                        <p class="card-text">Precio: L. 15</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="http://d26m4ikkajfmz.cloudfront.net/wp-content/uploads/2019/06/sula-el-pais-hn.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Jugos Sula<span class="titulo-span"><br>(Sabores varios)</span></h3>
                        <p class="card-text">Precio: L. 15</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://jugosdelvalle.com.mx/wp-content/uploads/2020/10/PS-DELVALLE-min.png"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Jugos del Valle<span class="titulo-span"><br>(Sabores varios)</span></h3>
                        <p class="card-text">Precio: L.10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Utensilios-->
    <div class="container" id="utensilios">

        <!--Cocina-->
        <!--Cocina-->
        <h2>Cocina</h2>
    
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="https://sgfm.elcorteingles.es/SGFM/dctm/MEDIA03/201801/05/00107315301023____1__640x640.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Sartenes <span class="titulo-span"><br>(Tamaños varios)</span></h3>
                        <p class="card-text">Precio: L. 100</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://ss623.liverpool.com.mx/xl/1077085064.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Cuchillos <span class="titulo-span"><br>Cachas de madera y blanca</span></h3>
                        <p class="card-text">Precio: L. 45</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/71zctKjf%2BUL._AC_SL1500_.jpg"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Batidores <span class="titulo-span"><br></span></h3>
                        <p class="card-text">Precio: L. 75</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img src="https://www.ikea.com/ca/en/images/products/magasin-rolling-pin__0711093_PE727978_S5.JPG"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Rodillo</h3>
                        <p class="card-text">Precio: L. 75</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://diunsa.vteximg.com.br/arquivos/ids/196533-292-292/BLSTPYG1209B-1.jpg?v=637432391289470000"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Licuadoras</h3>
                        <p class="card-text">Precio: L. 175</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img src="https://falabella.scene7.com/is/image/FalabellaCO/4162049_1?q=i?wid=800&hei=800&qlt=70"
                        class="card-img-top" alt="">
                    <div class="card-body">
                        <h3>Estufas de gas de mesa</h3>
                        <p class="card-text">Precio: L. 275</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="plasticos">
            <!--Plasticos-->
            <h2>Plasticos</h2>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="https://partycity6.scene7.com/is/image/PartyCity/_pdp_sq_?$_1000x1000_$&$product=PartyCity/179943"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Vasos Desechables <span class="titulo-span"><br>(25 unidades)</span></h3>
                            <p class="card-text">Precio: L. 25</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://i5.walmartimages.com/asr/c729f305-987d-475f-9c1f-61f6d068a2cf.62388e1f11fea3887a154405a982eba5.jpeg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Platos Desechables <span class="titulo-span"><br>(25 unidades)</span></h3>
                            <p class="card-text">Precio: L. 35</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://www.midpac.co.uk/image/cache/catalog/Catering/Disposable%20Cutlery/disposable-spoons-600x600.jpg"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Cucharras Desechables <span class="titulo-span"><br>(40 unidades)</span></h3>
                            <p class="card-text">Precio: L. 30</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <img src="https://www.casaideas.cl/arquivos/ids/181681-600-600/3218622000019_1.jpg?v=637152429780730000"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Contenedor Plastico</h3>
                            <p class="card-text">Precio: L. 55</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbJAbCHo3GhLY5hQ1rgvRPFSs0nP5E5OWhng&usqp=CAU"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Bolsas para Basura</h3>
                            <p class="card-text">Precio: L. 45</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <img src="https://jumboargentina.vteximg.com.br/arquivos/ids/524247-750-750/Bolsa-Ziploc-Organizar-Mediana-20-U-1-515498.jpg?v=636875250590770000"
                            class="card-img-top" alt="">
                        <div class="card-body">
                            <h3>Bolsas Ziploc</h3>
                            <p class="card-text">Precio: L. 70</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Limpieza-->
            <div class="container" id="plasticos">
                <h2>Limpieza</h2>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://www.xedex-centroamerica.com/sk-eu/content/dam/brands/dirt_is_good/global_use/1941343-packshot-bprimavera-5000x5000.png.rendition.380.380.png" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Bolsa de Detergente: Xedex</h3>
                                <p class="card-text">Precio: L. 48</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" >
                            <img src="https://jumbo.vteximg.com.br/arquivos/ids/410324/Cloro-Anti-Splash-19-L.jpg?v=637469372910870000" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Botella de Cloro: Clorox</h3>
                                <p class="card-text">Precio: L. 40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" >
                            <img src="https://www.privun.com/pub/media/catalog/product/cache/75eed2686e01eb22cb4050b2f40ddf97/h/t/httpsstorage.googleapis.comfotos-novaventaprivun2011495-suavizante-suavitel.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Suavizante de Ropa: Suavitel</h3>
                                <p class="card-text">Precio: L. 55</p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="card">
                            <img src="https://chrisalim.net/wp-content/uploads/2020/07/FAB-0153-0.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Limpiador Liquido: Fabuloso</h3>
                                <p class="card-text">Precio: L. 40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" >
                            <img src="http://www.suavel.com.mx//data/2017/February/suavel-cont-4-int-limpieza-de-las-esponjas.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Esponjas para lavar Platos</h3>
                                <p class="card-text">Precio: L.  12</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" >
                            <img src="https://rapit.hn/wp-content/uploads/2020/07/fibra3packsuli.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <h3>Paste para lavar Platos</h3>
                                <p class="card-text">Precio: L. 7</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection