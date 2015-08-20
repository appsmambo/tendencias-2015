@extends('layouts.marcas')
@section('content')
<div id="marcas-interna">
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/cacharel/banner.jpg" class="img-responsive" alt="CACHAREL" />
		<div class="sociales-marcas">
			<p class="negro">Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/cacharel" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Cacharel%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1UMZYH5" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/cacharel&media={{url()}}/img/marcas/cacharel/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/cacharel" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
	</div>
	<p class="hidden">
		Francia<br>
		Cacharel<br>
		Para la mujer que busca verse femenina y sofisticada con un estilo más clásico y relajado.<br>
		ítems de la temporada<br>
		parkas<br>
		prints<br>
		rayas<br>
		vestidos camiseros.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/cacharel/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/cacharel/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/cacharel/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/cacharel/4.jpg" alt="" />
		</div>
		<div class="item-marca w8">
			<img src="{{url()}}/img/marcas/cacharel/5.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/cacharel/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/cacharel/7.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Cacharel - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer que busca verse femenina y sofisticada con un estilo más clásico y relajado." />

<!-- Google -->
<meta itemprop="name" content="Cacharel - Las mejores marcas en Ripley">
<meta itemprop="description" content="Para la mujer que busca verse femenina y sofisticada con un estilo más clásico y relajado.">
<meta itemprop="image" content="{{url()}}/img/marcas/cacharel/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Cacharel - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/cacharel" />
<meta property="og:image" content="{{url()}}/img/marcas/cacharel/banner.jpg" />
<meta property="og:description" content="Para la mujer que busca verse femenina y sofisticada con un estilo más clásico y relajado." />
<meta property="og:site_name" content="Cacharel - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop