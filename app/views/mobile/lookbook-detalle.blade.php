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
                    
                    <div class="panel-lookbok clearfix" id="lookbook">
                        <div class="lookbook-arriba">
                            <div class="lookbook-arriba-interno">
                                <div class="lookbook-arriba-izq">
                                    <a href=""><img src="{{url()}}/images/btn-left.png" alt=""></a>
                                </div>
                                <div class="lookbook-arriba-centro">
                                    <p class="lookbook-arriba-titulo">Vestido a rayas frunce</p>
                                    <p class="lookbook-arriba-codigo">COD. 93728639</p>
                                </div>
                                <div class="lookbook-arriba-der">
                                    <a href=""><img src="{{url()}}/images/btn-right.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="cuerpo-lookbook">
                            <div id="cuerpo-lookbook" class="owl-carousel">
                                <div class="item-lookbook">
                                    <img src="{{url()}}/images/lookbook/detalle-1.jpg" alt="" class="img-responsive">                                
                                </div>
                                <div class="item-lookbook">
                                    <img src="{{url()}}/images/lookbook/detalle-2.jpg" alt="" class="img-responsive">
                                </div class="item-lookbook">
                                <div>
                                    <img src="{{url()}}/images/lookbook/detalle-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="item-lookbook">
                                    <img src="{{url()}}/images/lookbook/detalle-2.jpg" alt="" class="img-responsive">
                                </div>
                            </div>
                            <div class="item-lookbook-regresar">
                                <a href=""><i class="icon-left-open"></i><span>Regresar</span></a>
                            </div>
                            <div class="item-lookbook-logo">
                                <a href=""><img src="{{url()}}/images/lookbook/marquis.png" alt="" class="img-responsive"></a>
                            </div>
                            
                        </div> 
                        <div class="lookbook-abajo">
                            <div class="lookbook-abajo-interno">
                                <p class="lookbook-precio">Precio Normal</p>
                                <p class="lookbook-monto">S/. 79.90</p>
                            </div>
                        </div>                       
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