@extends('layouts.desktop')
@section('content')
<div id="marcas-interna" >
                        <div class="banner-marca">
                            <img src="{{url()}}/img/marcas/barbados/banner.jpg" class="img-responsive" alt="barbados" />
                            <div class="sociales-marcas">
                                <p>Compartir</p>
                                <a href="#" target="_blank"><img src="{{url()}}/img/marcas/facebook.png"  alt="facebook" /></a>
                                <a href="#" target="_blank"><img src="{{url()}}/img/marcas/twitter.png"  alt="twitter" /></a>
                                <a href="#" target="_blank"><img src="{{url()}}/img/marcas/pinterest.png"  alt="pinterest" /></a>
                                <a href="#" target="_blank"><img src="{{url()}}/img/marcas/google.png"  alt="google plus" /></a>
                                <a href="#" target="_blank"><img src="{{url()}}/img/marcas/instagram.png"  alt="instagram" /></a>
                            </div>
                        </div>
                        <div class="row no-gutter fondo-blanco">
                            <div class="col-sm-7 marca-left">
                                <div class="video-marca">
                                    <img src="{{url()}}/img/marcas/barbados/video-1.jpg"  class="img-responsive" alt="facebook" />
                                  <!--iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe-->
                                </div>
                                <!--div class="embed-responsive embed-responsive-16by9 video-marca">
                                    
                                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe>
                                </div-->
                                <!--div class="fondo-marcas barbados">
                                    
                                </div-->
                                <div class="content-tendencias otras-marcas barbados">
                                    
                                </div>
                            </div>
                            <div class="col-sm-5 marca-right">
                                <img src="{{url()}}/img/marcas/barbados/logo.jpg" class="img-responsive"  alt="barbados" />
                                <div class="precio-marca">
                                    <img src="{{url()}}/img/marcas/barbados/1.jpg" class="img-responsive"  alt="barbados" />
                                    <div class="fondo-blanco-detalle">
                                        <div class="imagen-precio-detalle">
                                            <img src="{{url()}}/img/marcas/barbados/detalle-imagen.png" class="img-responsive"  alt="Imagen" />
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
                            <img src="{{url()}}/img/marcas/barbados/video-2.jpg" class="img-responsive"  alt="Campañas" />
                            <div class="col-sm-6">
                                <img src="{{url()}}/img/marcas/barbados/3.jpg" class="img-responsive"  alt="Campañas" />
                            </div>
                            <div class="col-sm-6 content-tendencias-2">
                                <img src="{{url()}}/img/marcas/barbados/border.jpg" class="img-responsive"  alt="Campañas" />
                                <div class="content-tendencias-listas">
                                    <div class="content-tendencias-a">
                                        <ul>
                                            <li class="flecha"><img src="{{url()}}/img/marcas/barbados/flecha.png" class="img-responsive"  alt="Campañas" /></li>
                                                <li class="spring">TENDENCIA TENDENCIA SWEET BOHO<br>ítems de la temporada</li>
                                                <hr class="raya-roja">
                                                <li>flecos</li>
                                                <hr class="raya-negra">
                                                <li class="kimono">flores</li>
                                                <hr class="raya-negra">
                                                <li >flare</li>
                                                <hr class="raya-negra">
                                                <li class="kimono">kimonos</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 marca-left-2">
                                <img src="{{url()}}/img/marcas/barbados/4.jpg"  class="img-responsive" alt="facebook" />
                                <img src="{{url()}}/img/marcas/barbados/5.jpg"  class="img-responsive" alt="facebook" />
                            </div>
                            <div class="col-sm-6 marca-right-2">
                                <div class="precio-marca">
                                    <img src="{{url()}}/img/marcas/barbados/6.jpg" class="img-responsive"  alt="barbados" />
                                    
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