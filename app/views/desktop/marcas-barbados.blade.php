@extends('layouts.marcas')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/barbados/banner.jpg" class="img-responsive" alt="BARBADOS" />
		<a href="{{url()}}/marcas" class="boton-regresar"><img src="{{url()}}/img/marcas/boton-regresar-marcas.gif" alt="" /></a>
		<div class="sociales-marcas">
			<p class="negro">Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/marcas/barbados" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Barbados%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1Nc7FWf" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/marcas/barbados&media=http://modaripley.com/tendencias/img/Compartir-barbados.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/marcas/barbados" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
		<a href="#freewall" class="bajar">
			<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
		</a>
	</div>
	<p class="hidden">
		Perú - Chile<br>
		Urbana y actual, esta marca celebra su máxima expresión a través de jeans, kimonos y casacas.<br>
		TENDENCIA SWEET BOHO<br>
		ítems de la temporada<br>
		flecos, flores, flare, kimonos.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<a class="play" href="#" id="video-1" data-embed="embed-video-1">
				<img src="{{url()}}/img/marcas/barbados/1.jpg" alt="" />
			</a>
			<div id="embed-video-1" class="embed-video-marcas embed-responsive embed-responsive-16by9" style="display:none">
				<iframe class="embed-responsive-item" src="//www.youtube.com/embed/ioHyOySLexU?rel=0&enablejsapi=1" id="iframe-video-1"></iframe>
			</div>
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/barbados/2.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/barbados/3.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/barbados/4.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/barbados/6.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/barbados/7.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/barbados/8.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/barbados/9.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/barbados/10.jpg" alt="" width="100%" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Barbados - Las mejores marcas en Ripley</title>
<meta name="description" content="Urbana y actual, esta marca celebra su máxima expresión a través de jeans, kimonos y casacas" />

<!-- Google -->
<meta itemprop="name" content="Barbados - Las mejores marcas en Ripley" />
<meta itemprop="description" content="Urbana y actual, esta marca celebra su máxima expresión a través de jeans, kimonos y casacas" />
<meta itemprop="image" content="{{url()}}/img/Compartir-barbados.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/barbados" />
<meta property="og:title" content="Barbados - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/barbados" />
<meta property="og:image" content="{{url()}}/img/Compartir-barbados.jpg" />
<meta property="og:description" content="Urbana y actual, esta marca celebra su máxima expresión a través de jeans, kimonos y casacas" />
<meta property="og:site_name" content="Barbados - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop