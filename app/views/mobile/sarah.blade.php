@extends('layouts.mobile')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-12">
                <div class="wrapper-interno">
                    <div class="header-movil">
                        <div class="menu-movil">
                            <a class="btn-menu-movil boton"><i class="icon-menu-1"></i></a>
                        </div>
                        <div class="tema">
                            <a href="{{url()}}"><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href="{{url()}}"><img src="{{url()}}/images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    
                    <div class="panel-yo-elijo yo-elijo clearfix" id="panel-yo-elijo">
                        <a href="">
                            <img src="{{url()}}/images/sjp/sjp.jpg" alt="" class="img-responsive imagen-yo-elijo">
                            
                        </a>
                    </div>
                    <div class="panel-datos-yo-elijo">
                        <div class="titulo-datos-yo-elijo">
                            <h2>Nueva imagen de Ripley</h2>
                        </div>
                        <div class="datos-yo-elijo">
                            <p class="datos">
                                Actriz, modelo, diseñadora, editora de moda...es lo que conocemos de ella. Ahora, Sarah Jessica Parker llega a Ripley para mostrarnos su lado más cercano y enseñarnos todo lo que sabe sobre su pasión: La Moda.</p>
                            <p class="hash">#yoelijolasmejoresmarcas</p>
                        </div>
                        <div class="yo-elijo-compartir">
                            <img src="{{url()}}/images/sarah/compartelo-1.png" alt="">
                        </div>
                        <div class="yo-elijo-redes">
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/sjp" target="_blank"><i class="icon-facebook"></i></a></li>
                                <li><a href="https://twitter.com/home?status=Sarah%20Jessica%20Parker%20nos%20muestra%20su%20lado%20mas%20cercano%20y%20nosense%C3%B1a%20todo%20lo%20que%20sabe%20sobre%20su%20pasi%C3%B3n:%20La%20Moda.%20Ingresa%20a%20http://bit.ly/1NlXVaP" target="_blank"><i class="icon-twitter-6"></i></a></li>
                                <li><a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/sjp&media=http://modaripley.com/tendencias/img/sarah/1.jpg&description=" target="_blank"><i class="icon-pinterest"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/sjp" target="_blank"><i class="icon-gplus"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-video-yo-elijo">
                        <img src="{{url()}}/images/sjp/video-1.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=crKUcZio0-M" class="popup-youtube">
                            <div class="mascara-video">
                                <div class="dale-clic-video">
                                    <span><i class="icon-angle-down"></i></span>
                                </div>
                                <div class="icono-video">
                                    <p>play</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="panel-video-yo-elijo">
                        <img src="{{url()}}/images/sjp/video-2.jpg" alt="" class="img-responsive">
                        <a href="http://www.youtube.com/watch?v=Xzw_XdzCQUk" class="popup-youtube">
                            <div class="mascara-video">
                                <div class="dale-clic-video">
                                    <span><i class="icon-angle-down"></i></span>
                                </div>
                                <div class="icono-video">
                                    <p>play</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>             
</div>  
@stop

@section('metas')
<title>Sarah Jessica Parker, la nueva imagen de Ripley</title>
<meta name="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />

<!-- Google -->
<meta itemprop="name" content="Sarah Jessica Parker, la nueva imagen de Ripley">
<meta itemprop="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda.">
<meta itemprop="image" content="{{url()}}/img/sarah/1.jpg">

<!-- Open Graph data -->
<link rel='canonical' href='{{url()}}' />
<meta property="og:locale" content="es_ES" />
<meta property="og:title" content="Sarah Jessica Parker, la nueva imagen de Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/sjp" />
<meta property="og:image" content="{{url()}}/img/sarah/1.jpg" />
<meta property="og:description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="og:site_name" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="fb:admins" content="100008010128050" />
<meta property="fb:app_id" content="843141755772705" />
@stop