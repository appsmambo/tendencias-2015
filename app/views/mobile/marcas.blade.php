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
                            <a href=""><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href=""><img src="{{url()}}/images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    
                    <div class="panel-elije-tu-marca clearfix" id="elije-tu-marca">
                        <a href="">
                            <img src="{{url()}}/images/marcas/bg-marcas.jpg" alt="" class="img-responsive">
                            <div class="flecha-elije-tu-marca">
                                <a href=""><i class="icon-down-dir"></i></a>
                            </div>
                            <div class="titulo-elije-tu-marca">
                                <h1>Elige tu marca</h1>
                            </div>
                            <div class="subtitulo-elije-tu-marca">
                                <h2><span>Según tu estilo</span></h2>
                            </div>
                            
                        </a>
                    </div>
                    <div class="panel-galeria-elije-tu-marca">
                        <div class="container-fluid">
                            <div class="row no-gutters">
                                <div class="col-sm-12">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/marquis">
                                            <img src="{{url()}}/images/marcas/marquis.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/navigata">
                                            <img src="{{url()}}/images/marcas/navigata.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/index">
                                            <img src="{{url()}}/images/marcas/index.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/barbados">
                                            <img src="{{url()}}/images/marcas/barbados.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/tatienne">
                                            <img src="images/marcas/tatienne.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/cacharel">
                                            <img src="{{url()}}/images/marcas/cacharel.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/pepejeans">
                                            <img src="{{url()}}/images/marcas/pepe-jeans.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/river-island">
                                            <img src="{{url()}}/images/marcas/river-island.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/esprit">
                                            <img src="{{url()}}/images/marcas/espirit.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/tennis">
                                            <img src="{{url()}}/images/marcas/tennis.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/veromoda">
                                            <img src="{{url()}}/images/marcas/veromoda.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/guess">
                                            <img src="{{url()}}/images/marcas/guess.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="item-galeria-elije-tu-marca">                                        
                                        <a href="{{url()}}/marcas/only">
                                            <img src="{{url()}}/images/marcas/only.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
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