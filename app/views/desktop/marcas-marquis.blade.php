@extends('layouts.marcas')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/marquis/banner.jpg" class="img-responsive" alt="MARQUIS" />
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/marquis" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Marquis%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1Ewx70n" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/marquis&media={{url()}}/img/marcas/marquis/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/marquis" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
	</div>
	<p class="hidden">
		Perú - Chile - Colombia<br>
		MARQUIS<br>
		Para la mujer independiente y segura de sí misma, que busca vestir estilosa en cualquier ocasión.<br>
		TENDENCIA URBAN SAFARI<br>
		ítems de la temporada<br>
		blusas campesinas, prints florales, encajes, kimonos.<br>
		TENDENCIA NEW STRIPES<br>
		ítems de la temporada<br>
		Culottes, pantalones palazzo, shorts, camisas fluidas.<br>
		TENDENCIA SPRING JUNGLE<br>
		ítems de la temporada<br>
		joggers, prints palmeras, vestidos camiseros, kimonos.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<a class="play" href="#" id="video-1" data-embed="embed-video-1">
				<img src="{{url()}}/img/marcas/marquis/1.jpg" alt="" />
			</a>
			<div id="embed-video-1" class="embed-video-marcas embed-responsive embed-responsive-16by9" style="display:none">
				<iframe class="embed-responsive-item" src="//www.youtube.com/embed/8x5AazICdr4?rel=0&enablejsapi=1" id="iframe-video-1"></iframe>
			</div>
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/marquis/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/marquis/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/marquis/4.jpg" alt="" />
		</div>
		<div class="item-marca w8">
			<img src="{{url()}}/img/marcas/marquis/5.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/7.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/8.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/9.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/10.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Marquis - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />

<!-- Google -->
<meta itemprop="name" content="Marquis - Las mejores marcas en Ripley">
<meta itemprop="description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión.">
<meta itemprop="image" content="{{url()}}/img/marcas/marquis/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Marquis - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/marquis" />
<meta property="og:image" content="{{url()}}/img/marcas/marquis/banner.jpg" />
<meta property="og:description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />
<meta property="og:site_name" content="Marquis - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop