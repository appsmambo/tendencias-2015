@extends('layouts.marcas')
@section('content')
<div id="marcas-interna">
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/tatienne/banner.jpg" class="img-responsive" alt="TATIENNE" />
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/tatienne" target="_blank"><img src="{{url()}}/img/facebook-blanco.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Tatienne%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1IWRMMV" target="_blank"><img src="{{url()}}/img/twitter-blanco.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/tatienne&media={{url()}}/img/marcas/tatienne/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest-blanco.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/tatienne" target="_blank"><img src="{{url()}}/img/google-blanco.png" alt="google plus" /></a>
		</div>
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
			<img src="{{url()}}/img/marcas/tatienne/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/tatienne/4.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/tatienne/5.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/tatienne/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/tatienne/7.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/tatienne/8.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Tattiene - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés" />

<!-- Google -->
<meta itemprop="name" content="Tattiene - Las mejores marcas en Ripley">
<meta itemprop="description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés">
<meta itemprop="image" content="{{url()}}/img/marcas/tatienne/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Tattiene - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/tatienne" />
<meta property="og:image" content="{{url()}}/img/marcas/tatienne/banner.jpg" />
<meta property="og:description" content="Para la mujer de espíritu libre, bohemio y romántico, que busca la combinación perfecta a través de estampados, encajes y macramés" />
<meta property="og:site_name" content="Tattiene - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop