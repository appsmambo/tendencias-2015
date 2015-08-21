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
                                    <a href="{{url()}}/lookbook/{{$ant[0]->idlook}}/{{$ant[0]->idlookbook}}/{{Str::slug($ant[0]->nombrelook)}}" class="prev"><img src="{{url()}}/images/btn-left.png" alt=""></a>
                                </div>
                                <div class="lookbook-arriba-centro">
                                    <p class="lookbook-arriba-titulo">{{$producto[0]->nombrelook}}</p>
                                    <p class="lookbook-arriba-codigo">COD. {{$producto[0]->sku}}</p>
                                </div>
                                <div class="lookbook-arriba-der">
                                    <a href="{{url()}}/lookbook/{{$sig[0]->idlook}}/{{$sig[0]->idlookbook}}/{{Str::slug($sig[0]->nombrelook)}}" class="next"><img src="{{url()}}/images/btn-right.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="cuerpo-lookbook">
                            <div id="cuerpo-lookbook" class="owl-carousel">
                                @for($i = 1; $i <= $producto[0]->numeroimagenes; $i++)
                                    <div class="item-lookbook">
                                        <img src="{{url()}}/img/lookbook/detalle/max/{{Str::slug($producto[0]->nombrelook)}}-{{$i}}.jpg" alt="" class="img-responsive">                                
                                    </div>
                                  
                                @endfor                                    
                               
                            </div>
                            <div class="item-lookbook-regresar">
                                <a href="{{url()}}/lookbook"><i class="icon-left-open"></i><span>Regresar</span></a>
                            </div>
                            <div class="item-lookbook-logo">
                                <a href=""><img src="{{url()}}/img/lookbook/{{$producto[0]->imagenmarca}}" alt="" class="img-responsive"></a>
                            </div>
                            
                        </div> 
                        <div class="lookbook-abajo">
                            <div class="lookbook-abajo-interno">
                                <p class="lookbook-precio">Precio</p>
                                <p class="lookbook-monto">S/. {{$producto[0]->precio}}</p>
                            </div>
                        </div>                       
                    </div>
                    <div class="lista-similares">
                        <h5>productos similares</h5>
                    </div>   
                    
                    @foreach($similares as $index =>$similar)
                    <div class="col-xs-6 col-sm-6">
                        <div class="imagen-relacionada">
                            <a href="{{url()}}/lookbook/{{ $similar->idlook }}/{{ $similar->idlookbook }}/{{ Str::slug($similar->nombrelook) }}"><img src="{{url()}}/img/lookbook/similares/{{Str::slug($similar->nombrelook)}}.jpg" alt="{{$similar->nombrelook}}" class="img-responsive" />
                            </a>
                        </div>
                    </div>                                    
                    @endforeach 
                       
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