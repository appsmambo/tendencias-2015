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
                            <a href="{{url()}}/"><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href="{{url()}}/"><img src="{{url()}}/images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    
                    <div class="panel-yo-elijo clearfix" id="panel-yo-elijo">
                        <a href="#">
                            <img src="{{url()}}/images/marcas/marquis/principal.jpg" alt="" class="img-responsive">
                            
                        </a>
                        <div class="regresar-marcas">
                            <a href="{{url()}}/marcas"><img src="{{url()}}/images/boton-regresar-marcas.gif" alt="" class="img-responsive"></a>
                        </div>
                        <div class="compartir-galeria">
                             <img src="{{url()}}/images/sarah/compartelo-b.png" alt="">
                             <div class="compartir-galeria-redes">
                                 <ul>
                                     <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/marcas/marquis" target="_blank"><img src="{{url()}}/img/facebook-b.png" alt="facebook" /></a></li>
                                     <li><a href="https://twitter.com/home?status=Marquis%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1Nc7FWf" target="_blank"><img src="{{url()}}/img/twitter-b.png" alt="twitter" /></a></li>
                                 </ul>
                             </div>
                         </div>
                    </div>
                    <!--<div class="panel-marcas clearfix" id="panel-marcas">
                        <a href="http://www.youtube.com/watch?v=crKUcZio0-M" class="popup-youtube"><img src="{{url()}}/images/marcas/marquis/video-1.jpg" alt="" class="img-responsive">
                            
                        </a>
                    </div>-->
                    <div class="panel-lookbook-index">
                        <a href=""><img src="{{url()}}/images/marcas/marquis/foto.jpg" alt="" class="img-responsive">
                            
                        </a>
                    </div>
                    <!--<div class="panel-accesorios-index">
                        <a href="http://www.youtube.com/watch?v=crKUcZio0-M" class="popup-youtube"><img src="{{url()}}/images/marcas/marquis/video-2.jpg" alt="" class="img-responsive">
                            
                        </a>
                    </div>-->
                    <div class="panel-accesorios-index">
                        <img src="{{url()}}/images/marcas/marquis/galeria-1.jpg" alt="" class="img-responsive">
                            
                        
                    </div>
                    <div class="panel-accesorios-index">
                        <img src="{{url()}}/images/marcas/marquis/galeria-2.jpg" alt="" class="img-responsive">
                            
                        
                    </div>
                    <div class="panel-accesorios-index">
                        <img src="{{url()}}/images/marcas/marquis/galeria-3.jpg" alt="" class="img-responsive">
                            
                        
                    </div>

                </div>
            </div>
        </div>
    </div>             
</div>    
@stop

@section('metas')
<title>Yo elijo las mejores marcas - Tendencias 2015 - Ripley</title>
<meta name="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />

<!-- Google -->
<meta itemprop="name" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley">
<meta itemprop="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. ">
<meta itemprop="image" content="{{url()}}/img/home/sarah.jpg">

<!-- Open Graph data -->

<link rel='canonical' href='{{url()}}/' />
<meta property="og:locale" content="es_ES" />
<meta property="og:title" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/" />
<meta property="og:image" content="{{url()}}/img/home/sarah.jpg" />
<meta property="og:description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />
<meta property="og:site_name" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />
<meta property="fb:admins" content="100008010128050" />
<meta property="fb:app_id" content="843141755772705" />
@stop