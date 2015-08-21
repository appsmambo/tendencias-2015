@extends('layouts.marcas')
@section('content')
<div id="marcas-interna">
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/index/banner.jpg" class="img-responsive" alt="INDEX" />
		<a href="{{url()}}/marcas" class="boton-regresar"><img src="{{url()}}/img/marcas/boton-regresar-marcas.gif" alt="" /></a>
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/index" target="_blank"><img src="{{url()}}/img/facebook-blanco.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Index%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1JllOPW" target="_blank"><img src="{{url()}}/img/twitter-blanco.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/index&media={{url()}}/img/Compartir-index.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest-blanco.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/index" target="_blank"><img src="{{url()}}/img/google-blanco.png" alt="google plus" /></a>
		</div>
		<a href="#freewall" class="bajar">
			<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
		</a>
	</div>
	<p class="hidden">
		Perú - Chile - Colombia<br>
		Index<br>
		Para una chica divertida, fresca, dinámica, versátil y siempre con una actitud positiva frente a la vida. Se divierte y se inspira a través de la moda.<br>
		TENDENCIA BOHO<br>
		ítems de la temporada<br>
		blusas campesinas<br>
		prints, vestidos fluidos, kimonos.<br>
		TENDENCIA DENIM & WHITE<br>
		ítems de la temporada<br>
		blusa denim, blanco, vestidos denim, jeans con roturas.<br>
		TENDENCIA FUNNY STRIPES<br>
		ítems de la temporada<br>
		crop tops, polos largos, vestidos pegados, rayas.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/index/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/index/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/index/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/index/4.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/7.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/8.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/9.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/10.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/11.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/12.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/index/13.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Index - Las mejores marcas en Ripley</title>
<meta name="description" content="Para una chica divertida, fresca, dinámica, versátil ysiempre con una actitud positiva frente a la vida.Se divierte y se inspira a través de la moda." />

<!-- Google -->
<meta itemprop="name" content="Index - Las mejores marcas en Ripley" />
<meta itemprop="description" content="Para una chica divertida, fresca, dinámica, versátil ysiempre con una actitud positiva frente a la vida.Se divierte y se inspira a través de la moda." />
<meta itemprop="image" content="{{url()}}/img/Compartir-index.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/index" />
<meta property="og:title" content="Index - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/index" />
<meta property="og:image" content="{{url()}}/img/Compartir-index.jpg" />
<meta property="og:description" content="Para una chica divertida, fresca, dinámica, versátil ysiempre con una actitud positiva frente a la vida.Se divierte y se inspira a través de la moda." />
<meta property="og:site_name" content="Index - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop