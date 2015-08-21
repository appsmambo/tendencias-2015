@extends('layouts.marcas')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/pepejeans/banner.jpg" class="img-responsive" alt="PEPE JEANS" />
		<a href="{{url()}}/marcas" class="boton-regresar"><img src="{{url()}}/img/marcas/boton-regresar-marcas.gif" alt="" /></a>
		<div class="sociales-marcas">
			<p class="negro">Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u={{url()}}/marcas/pepejeans" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Pepe%20Jeans%20-%20Las%20mejores%20marcas%20en%20Ripley%20http://bit.ly/1TM1CvI" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url={{url()}}/marcas/pepejeans&media={{url()}}/img/Compartir-pepejeans.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url={{url()}}/marcas/pepejeans" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
		<a href="#freewall" class="bajar">
			<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
		</a>
	</div>
	<p class="hidden">
		Londres<br>
		Pepe Jeans
	</p>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/pepejeans/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/pepejeans/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/pepejeans/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/pepejeans/4.jpg" alt="" />
		</div>
	</div>
</div>
@stop

@section('metas')
<title>Pepe Jeans - Las mejores marcas en Ripley</title>
<meta name="description" content="Inspirada en la moda urbana, esta marca es para la mujer que disfruta ama el denim" />

<!-- Google -->
<meta itemprop="name" content="Pepe Jeans - Las mejores marcas en Ripley" />
<meta itemprop="description" content="Inspirada en la moda urbana, esta marca es para la mujer que disfruta ama el denim" />
<meta itemprop="image" content="{{url()}}/img/Compartir-pepejeans.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/pepejeans" />
<meta property="og:title" content="Pepe Jeans - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/pepejeans" />
<meta property="og:image" content="{{url()}}/img/Compartir-pepejeans.jpg" />
<meta property="og:description" content="Inspirada en la moda urbana, esta marca es para la mujer que disfruta ama el denim" />
<meta property="og:site_name" content="Pepe Jeans - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop