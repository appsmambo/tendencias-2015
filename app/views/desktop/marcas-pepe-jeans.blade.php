@extends('layouts.desktop')
@section('content')
<div id="marcas-interna" >
                        <div class="banner-marca">
                            <img src="{{url()}}/img/marcas/pepejeans/banner.jpg" class="img-responsive" alt="pepejeans" />
                            <div class="sociales-marcas">
                                <p>Compartir</p>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/marcas/pepejeans" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
                                <a href="https://twitter.com/home?status=Ripley%20tendencias%202015%20PepeJeans" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
                                <a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/marcas/pepejeans&media=http://modaripley.com/tendencias/img/marcas/pepejeans/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
                                <a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/marcas/pepejeans" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
                            </div>
                        </div>
                        <div class="row no-gutter fondo-blanco">
                            <div class="col-sm-7 marca-left">
                                <div class="video-marca">
                                    <img src="{{url()}}/img/marcas/pepejeans/video-1.jpg"  class="img-responsive" alt="facebook" />
                                  <!--iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe-->
                                </div>
                                <!--div class="embed-responsive embed-responsive-16by9 video-marca">
                                    
                                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe>
                                </div-->
                                <!--div class="fondo-marcas pepejeans">
                                    
                                </div-->
                                <div class="content-tendencias otras-marcas pepejeans">
                                    
                                </div>
                            </div>
                            <div class="col-sm-5 marca-right">
                                <img src="{{url()}}/img/marcas/pepejeans/logo.jpg" class="img-responsive"  alt="pepejeans" />
                                <div class="precio-marca">
                                    <img src="{{url()}}/img/marcas/pepejeans/1.jpg" class="img-responsive"  alt="pepejeans" />
                                    <div class="fondo-blanco-detalle">
                                        <div class="imagen-precio-detalle">
                                            <img src="{{url()}}/img/marcas/pepejeans/detalle-imagen.png" class="img-responsive"  alt="Imagen" />
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