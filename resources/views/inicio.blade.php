@extends('plantilla')
@section('titulo','Inicio')
@section('activeInicio','id=active')
@section('contenido')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://media.metrolatam.com/2020/05/08/carnesauno839509-cacdfc331dae7d9f534ee64b0de18387-1200x800.jpg" class="d-block w-100 h-90" alt="" >
            <div class="carousel-caption d-none d-md-block">
            <h5>Carnes</h5>
            <p>Las mejores carnes de Roatan</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://comerbeber.com/archivos/styles/xlarge/public/imagen/2018/05/lacteos_as_175247677.jpg?itok=HQ_HiA5q" class="d-block w-100 h-90" alt="">
            <div class="carousel-caption d-none d-md-block">
            <h5>Lacteos</h5>
            <p>Para ti que te encanta la leche</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://d1uz88p17r663j.cloudfront.net/resized/24C96B76-811C-6377-B9D8-FF0000673B69-490x252-b-min_1200_600.png" class="d-block w-100 h-90" alt="">
            <div class="carousel-caption d-none d-md-block">
            <h5>Panaderia</h5>
            <p>El mejor pan</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container categorias" style="margin-top:50px">
        <h2 class="text-center">Algunos de Nuestros Productos</h2>

        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://static.wixstatic.com/media/93d44d_874c6be5bd3c48deba875584677528da~mv2.png/v1/fill/w_300,h_238,al_c,q_85,usm_0.66_1.00_0.01/grains.webp" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Granos</h5>
                    <p class="card-text">
                        El arroz silvestre no es en realidad arroz. Es una semilla de una hierba acuática originalmente cultivada por las tribus de América del Norte. Tiene un fuerte sabor y es algo caro, 
                        así que por lo regular se mezcla con otros tipos de arroz.
                        </p>
                    </div>
                </div>                
            </div>
            <div class="col-md-4">   
                <div class="card bg-dark text-white">
                    <img src="https://cdn.buenavibra.es/wp-content/uploads/2015/11/14033346/Webp.net-resizeimage-13.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Frutas</h5>
                    <p class="card-text">
                        Una vez ingeridas, las bananas tienen un efecto antiácido natural. 
                        Así que, la próxima vez que experimentes acidez, ¡acude a esta fruta!
                    </p>                        
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://buenosairesconnect.com/wp-content/uploads/2020/06/27072667_1823238167974403_2234490906473321013_n-696x522.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Verduras</h5>
                    <p class="card-text">
                        Es cierto que si comes demasiadas zanahorias tu piel
                        puede tornarse anaranjada.
                    </p>                        
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://notipress.mx/img/content/4567.webp" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Refrescos</h5>
                    <p class="card-text">
                        Latinoamérica es la región en el mundo donde se toma másrefresco. 
                        Argentina encabeza la lista, seguido por Chile, México,Uruguay y Estados Unidos.
                    </p> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://static.wixstatic.com/media/a0ff3b_11886ccff31b42be8fb4059f1b2c9691~mv2_d_2362_2132_s_2.jpg/v1/fill/w_671,h_671,al_c,q_85,usm_0.66_1.00_0.01/a0ff3b_11886ccff31b42be8fb4059f1b2c9691~mv2_d_2362_2132_s_2.webp" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Carnes</h5>
                    <p class="card-text">
                        La Organización de las Naciones Unidas de la Alimentación y la Agricultura, 
                        más conocida como FAO, determina que la carne más consumida en el mundo es la 
                        de cerdo (37%), por delante de la de ave (32%) y la de vacuno (24%). Curiosamente, 
                        la carne de cerdo se considera un alimento prohibido en algunos países. 
                    </p> 
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://images.ctfassets.net/yixw23k2v6vo/5T58wdAlC8cSWECsQkMkSA/c2ce8b0a4cd8ae6b745b68707ab54d0a/iStock-536457337.jpg?w=864&h=576&fm=webp&fit=thumb&q=65" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Lacteos</h5>
                    <p class="card-text">
                        Las cajas de leche fueron inventadas en 1964. Para entonces,  la leche era distribuida en botellas de vidrio.
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Insert/Drop Grid Column codes below-->
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://image.jimcdn.com/app/cms/image/transf/none/path/s4ac74c971c1a6c4b/backgroundarea/i42e9af57673f6737/version/1530819119/image.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Utensilios</h5>
                    <p class="card-text">
                        ¿Para qué sirve el agujero de la cuchara de espaguetis?
                        Para medir la ración de espaguetis recomendada para un comensal.
                    </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/718iLD5eCiL._AC_SX466_.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Plasticos/Desechables</h5>
                    <p class="card-text">
                        Perfectos para cualquiera fiesta y para olvidar la tarea para lavar los trastes.
                    </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark text-white">
                    <img src="https://www.hogarmania.com/archivos/201112/limpiadores-comerciales-xl-668x400x80xX.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">
                    <h5 class="card-title">Productos de Limpieza</h5>
                    <p class="card-text">
                        La limpieza de las calles no surgió hasta la Edad Media.
                        Es por la aparición de enfermedades pandémicas cuando empiezan a aparecer los primeros conatos de conciencia de limpieza colectiva urbana
                    </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-proveedores">
        <h2 class="text-center">Nuestros Proveedores</h2>
        <div class="row-proveedores">
            <div class="col-sm" >
                <img src="https://www.molinoharinerosula.com/themes/molino-harinero-sula/assets/images/logo.png" class="img-fluid" />
            </div>
            <div class="col-sm">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Logo_Grupo_BIMBO.svg/630px-Logo_Grupo_BIMBO.svg.png" class="img-fluid" />
            </div>
            <div class="col-sm">
                <img src="https://iconape.com/wp-content/png_logo_vector/leyde-logo.png" class="img-fluid" />
            </div>
            <div class="col-sm">
                <img src="https://www.estrategiaynegocios.net/csp/mediapool/sites/dt.common.streams.StreamServer.cls?STREAMOID=a_g4Awr6leUoR$VpX_Zog8$daE2N3K4ZzOUsqbU5sYuZP89ho8xgJWf9sdYgSMDEWCsjLu883Ygn4B49Lvm9bPe2QeMKQdVeZmXF$9l$4uCZ8QDXhaHEp3rvzXRJFdy0KqPHLoMevcTLo3h8xh70Y6N_U_CryOsw6FTOdKL_jpQ-&CONTENTTYPE=image/jpeg" class="img-fluid"/>
            </div>
        </div>
        <div class="row-proveedores">
            <div class="col-sm">
                <img src="https://www.lacthosa.com/wp-content/uploads/2017/01/lacthosa-nuestras-marcas-logo-sula.png" class="img-fluid"/>
            </div>
            <div class="col-sm">
                <img src="http://www.dinaplasthn.com/imagenes/Todas/logo_dinaplast.jpg" class="img-fluid"/>
            </div>
            <div class="col-sm">
                <img src="https://acciontrabajo.hn/logos/321001001/2714" class="img-fluid"/>
            </div>
            <div class="col-sm">
                <img src="http://fundahrse.org/wp-content/uploads/2015/12/Grupo-Jaremar-edit.jpg" class="img-fluid"/>
            </div>
        </div>
    </div>
@endsection