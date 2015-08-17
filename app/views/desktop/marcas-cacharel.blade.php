@extends('layouts.desktop')
@section('content')
<div id="marcas-interna" >
                        <div class="banner-marca">
                            <img src="{{url()}}/img/marcas/cacharel/banner.jpg" class="img-responsive" alt="cacharel" />
                            <div class="sociales-marcas">
                                <p>Compartir</p>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/marcas/cacharel" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
                                <a href="https://twitter.com/home?status=Ripley%20tendencias%202015%20Cacharel" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
                                <a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/marcas/cacharel&media=http://modaripley.com/tendencias/img/marcas/cacharel/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
                                <a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/marcas/cacharel" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
                            </div>
                        </div>
                        <div class="row no-gutter fondo-blanco">
                            <div class="col-sm-7 marca-left">
                                <div class="video-marca">
                                    <img src="{{url()}}/img/marcas/cacharel/video-1.jpg"  class="img-responsive" alt="facebook" />
                                  <!--iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe-->
                                </div>
                                <!--div class="embed-responsive embed-responsive-16by9 video-marca">
                                    
                                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe>
                                </div-->
                                <!--div class="fondo-marcas cacharel">
                                    
                                </div-->
                                <div class="content-tendencias otras-marcas cacharel">
                                    
                                </div>
                            </div>
                            <div class="col-sm-5 marca-right">
                                <img src="{{url()}}/img/marcas/cacharel/logo.jpg" class="img-responsive"  alt="cacharel" />
                                <div class="precio-marca">
                                    <img src="{{url()}}/img/marcas/cacharel/1.jpg" class="img-responsive"  alt="cacharel" />
                                    <div class="fondo-blanco-detalle">
                                        <div class="imagen-precio-detalle">
                                            <img src="{{url()}}/img/marcas/cacharel/detalle-imagen.png" class="img-responsive"  alt="Imagen" />
                                            <p>
                                                <span>BlusaTennis S/.129</span><br/>
                                                25347345
                                            </p>
                                            <a href="#" target="_blank">Tendencia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <img src="{{url()}}/img/marcas/cacharel/video-2.jpg" class="img-responsive"  alt="Campañas" />
                            <div class="col-sm-6">
                                <img src="{{url()}}/img/marcas/cacharel/3.jpg" class="img-responsive"  alt="Campañas" />
                            </div>
                            <div class="col-sm-6 content-tendencias-2">
                                <img src="{{url()}}/img/marcas/cacharel/border.jpg" class="img-responsive"  alt="Campañas" />
                                <div class="content-tendencias-listas">
                                    <div class="content-tendencias-a">
                                        <ul>
                                            <li class="flecha"><img src="{{url()}}/img/marcas/cacharel/flecha.png" class="img-responsive"  alt="Campañas" /></li>
                                                <li class="spring">TENDENCIA CACHAREL<br>ítems de la temporada</li>
                                                <hr class="raya-turquesa">
                                                <li>parkas</li>
                                                <hr class="raya-negra">
                                                <li class="kimono">prints</li>
                                                <hr class="raya-negra">
                                                <li >rayas</li>
                                                <hr class="raya-negra">
                                                <li class="kimono">vestidos camiseros</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
@stop

@section('metas')
<title>Ripley, tendencias 2015</title>
<meta name="description" content="Ripley, tendencias 2015" />

<!-- Google -->
<meta itemprop="name" content="Ripley, tendencias 2015">
<meta itemprop="description" content="Ripley, tendencias 2015">
<meta itemprop="image" content="{{url()}}/ripley-tendencias-2015.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Ripley, tendencias 2015" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/ripley-tendencias-2015.jpg" />
<meta property="og:description" content="Ripley, tendencias 2015" />
<meta property="og:site_name" content="Ripley, tendencias 2015" />
<meta property="fb:admins" content="100008010128050" />
@stop