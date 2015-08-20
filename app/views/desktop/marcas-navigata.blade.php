@extends('layouts.marcas')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/navigata/banner.jpg" class="img-responsive" alt="NAVIGATA" />
		<div class="sociales-marcas">
			<p class="negro">Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/navigata" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Navigata%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1DYyk5y" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/navigata&media={{url()}}/img/marcas/navigata/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/navigata" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
	</div>
	<p class="hidden">
		Perú<br>
		NAVIGATA<br>
		Esta marca celebra la expresión personal, ofreciendo colecciones inspiradas en las últimas tendencias de moda.<br>
		TENDENCIA FUNNY STRIPES<br>
		ítems de la temporada<br>
		vestidos algodón, denim, prints florales, líneas.
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/navigata/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/navigata/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/navigata/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/navigata/4.jpg" alt="" />
		</div>
		<div class="item-marca w8">
			<img src="{{url()}}/img/marcas/navigata/5.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/navigata/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/navigata/7.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/navigata/8.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/navigata/9.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/navigata/10.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Navigata - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer femenina y práctica que busca el equilibrio entre lo clásico y lo contemporáneo, a través de líneas y estampados diferentes" />

<!-- Google -->
<meta itemprop="name" content="Navigata - Las mejores marcas en Ripley">
<meta itemprop="description" content="Para la mujer femenina y práctica que busca el equilibrio entre lo clásico y lo contemporáneo, a través de líneas y estampados diferentes">
<meta itemprop="image" content="{{url()}}/img/marcas/navigata/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Navigata - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/navigata" />
<meta property="og:image" content="{{url()}}/img/marcas/navigata/banner.jpg" />
<meta property="og:description" content="Para la mujer femenina y práctica que busca el equilibrio entre lo clásico y lo contemporáneo, a través de líneas y estampados diferentes" />
<meta property="og:site_name" content="Navigata - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop