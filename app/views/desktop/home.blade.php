@extends('layouts.desktop')
@section('content')
<div class="contenedor-home-full-size">
	<a href="#" class="cerrar-full-size" title="Continuar">
		<img src="{{url()}}/img/boton-cerrar.png" class="img-responsive center-block" alt="" />
	</a>
	<img src="{{url()}}/img/home/sarah-full-size.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
</div>
<div class="contenedor-home" style="display:none">
	<a href="{{url()}}/sjp" title="Sarah Jessica Parker">
		<img src="{{url()}}/img/home/sarah.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
	</a>
	<a href="{{url()}}/marcas" title="Marcas">
		<img src="{{url()}}/img/home/marcas.jpg" class="img-responsive center-block" alt="Marcas" />
	</a>
	<a href="#" title="Lookbook">
		<img src="{{url()}}/img/home/lookbook.jpg" class="img-responsive center-block" alt="Lookbook" />
	</a>
	<a href="{{url()}}/accesorios" title="Accesorios">
		<img src="{{url()}}/img/home/accesorios.jpg" class="img-responsive center-block" alt="Accesorios" />
	</a>
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