@extends('layouts.desktop')
@section('content')
<div id="sarah">
<a href="{{url()}}/sjp" title="Sarah Jessica Parker">
	<img src="{{url()}}/img/home/sarah.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
</a>
<a href="#marcas-home" class="bajar">
		<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
</a>
</div>
<div id="marcas-home">
<a href="{{url()}}/marcas" title="Marcas">
	<img src="{{url()}}/img/home/marcas.jpg" class="img-responsive center-block" alt="Marcas" />
</a>
</div>
<a href="{{url()}}/lookbook" title="Lookbook">
	<img src="{{url()}}/img/home/lookbook.jpg" class="img-responsive center-block" alt="Lookbook" />
</a>
<a href="{{url()}}/accesorios" title="Accesorios">
	<img src="{{url()}}/img/home/accesorios.jpg" class="img-responsive center-block" alt="Accesorios" />
</a>
<div class="hidden">
	<p id="sjp-intro" class="text-center">
		<img src="{{url()}}/img/home/sjp-intro.jpg" width="1184" height="2094" class="img-responsive center-block" alt="Sarah Jessica Parker" />
	</p>
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
<link rel="canonical" href="{{url()}}/" />
<meta property="og:locale" content="es_ES" />
<meta property="og:title" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/" />
<meta property="og:image" content="{{url()}}/img/Compartir-sjp.jpg" />
<meta property="og:description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />
<meta property="og:site_name" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley." />
<meta property="fb:admins" content="100008010128050" />
<meta property="fb:app_id" content="843141755772705" />
@stop