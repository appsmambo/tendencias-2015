@extends('layouts.marcas')
@section('content')
<div id="marcas-interna">
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/tatienne/banner.jpg" class="img-responsive" alt="TATIENNE" />
		<a href="{{url()}}/marcas" class="boton-regresar"><img src="{{url()}}/img/marcas/boton-regresar-marcas.gif" alt="" /></a>
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/tatienne" target="_blank"><img src="{{url()}}/img/facebook-blanco.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Tatienne%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1IWRMMV" target="_blank"><img src="{{url()}}/img/twitter-blanco.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/tatienne&media={{url()}}/img/Compartir-tatienne.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest-blanco.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/tatienne" target="_blank"><img src="{{url()}}/img/google-blanco.png" alt="google plus" /></a>
		</div>
		<a href="#freewall" class="bajar">
			<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
		</a>
	</div>
	<p class="hidden">
		Chile<br>
		TATIENNE<br>
		Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés.<br>
		TENDENCIA BOHO<br>
		ítems de la temporada<br>
		encajes, flores, prints, bordados.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<a class="play" href="#" id="video-1" data-embed="embed-video-1">
				<img src="{{url()}}/img/marcas/tatienne/1.jpg" alt="" />
			</a>
			<div id="embed-video-1" class="embed-video-marcas embed-responsive embed-responsive-16by9" style="display:none">
				<iframe class="embed-responsive-item" src="//www.youtube.com/embed/z0ThuCbUjs0?rel=0&enablejsapi=1" id="iframe-video-1"></iframe>
			</div>
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/2.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/3.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/tatienne/4.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/tatienne/5.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/6.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/tatienne/7.jpg" alt="" width="100%" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/tatienne/8.jpg" alt="" width="100%" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Tatienne - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés" />

<!-- Google -->
<meta itemprop="name" content="Tatienne - Las mejores marcas en Ripley" />
<meta itemprop="description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés" />
<meta itemprop="image" content="{{url()}}/img/Compartir-tatienne.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/tatienne" />
<meta property="og:title" content="Tatienne - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/tatienne" />
<meta property="og:image" content="{{url()}}/img/Compartir-tatienne.jpg" />
<meta property="og:description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés" />
<meta property="og:site_name" content="Tatienne - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop