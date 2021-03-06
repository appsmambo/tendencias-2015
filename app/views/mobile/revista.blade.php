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
                    
                    
                    
                   
                </div>
            </div>
        </div>
    </div>             
</div>
<div class="absolute-revista">
    <div class="content-a" style="width:100%">
		<div class="content-b">
			<div style="width:320px;height:300px;margin:0 auto">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="//e.issuu.com/embed.html#0/14907484" ></iframe>
				</div>
			</div>
		</div>
    </div>
                             
 </div>  
@stop

@section('metas')
<title>Yo elijo las mejores marcas - Tendencias 2015 - Ripley</title>
<meta name="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />

<!-- Google -->
<meta itemprop="name" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley" />
<meta itemprop="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />
<meta itemprop="image" content="{{url()}}/img/Compartir-home.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/revista" />
<meta property="og:locale" content="es_ES" />
<meta property="og:title" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/revista" />
<meta property="og:image" content="{{url()}}/img/Compartir-home.jpg" />
<meta property="og:description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />
<meta property="og:site_name" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />
<meta property="fb:admins" content="100008010128050" />
<meta property="fb:app_id" content="843141755772705" />
@stop
