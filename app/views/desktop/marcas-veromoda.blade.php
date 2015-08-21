@extends('layouts.desktop')
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/veromoda/logo.png" class="img-responsive center-block" alt="Veromoda" />
		<p>
			Es la mejor elección para la mujer joven e independiente a la que le importa la moda. Ofrece todo tipo de prendas de calidad, con precios asequibles, para quien le guste divertirse con sus looks.
		</p>
		<a href="http://www.veromoda.com/?forcecountry=GB&customerGroupTrigger=mobile&redirected=1" target="_blank"><img src="{{url()}}/img/marcas/veromoda/boton.jpg" class="img-responsive center-block" alt="Veromoda" /></a>
	</div>
</div>
<img src="{{url()}}/img/marcas/veromoda/banner.jpg" class="img-responsive" alt="Veromoda" />
@stop

@section('metas')
<title>Veromoda - Las mejores marcas en Ripley</title>
<meta name="description" content="Es la mejor elección para la mujer joven e independiente a la que le importa la moda. Ofrece todo tipo de prendas de calidad, con precios asequibles, para quien le guste divertirse con sus looks." />

<!-- Google -->
<meta itemprop="name" content="Veromoda - Las mejores marcas en Ripley">
<meta itemprop="description" content="Es la mejor elección para la mujer joven e independiente a la que le importa la moda. Ofrece todo tipo de prendas de calidad, con precios asequibles, para quien le guste divertirse con sus looks.">
<meta itemprop="image" content="{{url()}}/img/marcas/veromoda/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Veromoda - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/veromoda" />
<meta property="og:image" content="{{url()}}/img/marcas/veromoda/banner.jpg" />
<meta property="og:description" content="Es la mejor elección para la mujer joven e independiente a la que le importa la moda. Ofrece todo tipo de prendas de calidad, con precios asequibles, para quien le guste divertirse con sus looks." />
<meta property="og:site_name" content="Veromoda - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop