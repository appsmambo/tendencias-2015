@extends('layouts.desktop')
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/tennis/logo.png" class="img-responsive center-block" alt="Tennis" />
		<p>
			La creatividad colombiana al servicio de la moda. Siempre a la vanguardia en diseño y en procesos de producción, se enfoca en un público joven, urbano, fresco y dinámico, tanto mujeres como hombres.
		</p>
		<a href="http://www.tennis.com.co/" target="_blank"><img src="{{url()}}/img/marcas/tennis/boton.jpg" class="img-responsive center-block" alt="Tennis" /></a>
	</div>
</div>
<img src="{{url()}}/img/marcas/tennis/banner.jpg" class="img-responsive" alt="Tennis" />
@stop

@section('metas')
<title>Tennis - Las mejores marcas en Ripley</title>
<meta name="description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />

<!-- Google -->
<meta itemprop="name" content="Tennis - Las mejores marcas en Ripley">
<meta itemprop="description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión.">
<meta itemprop="image" content="{{url()}}/img/Compartir-tennis.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Tennis - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/tennis" />
<meta property="og:image" content="{{url()}}/img/Compartir-tennis.jpg" />
<meta property="og:description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />
<meta property="og:site_name" content="Tennis - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop