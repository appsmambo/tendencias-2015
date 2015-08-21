@extends('layouts.desktop')
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/espirit/logo.png" class="img-responsive center-block" alt="Esprit" />
		<p>
			&nbsp;
		</p>
		<a href="http://www.espirit.com/" target="_blank"><img src="{{url()}}/img/marcas/espirit/boton.jpg" class="img-responsive center-block" alt="Esprit" /></a>
	</div>
</div>
<img src="{{url()}}/img/marcas/espirit/banner.jpg" class="img-responsive" alt="Esprit" />
@stop

@section('metas')
<title>Esprit - Las mejores marcas en Ripley</title>
<meta name="description" content="Espirit Marca Alemana." />

<!-- Google -->
<meta itemprop="name" content="Esprit - Las mejores marcas en Ripley">
<meta itemprop="description" content="Espirit Marca Alemana.">
<meta itemprop="image" content="{{url()}}/img/Compartir-esprit.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Esprit - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/esprit" />
<meta property="og:image" content="{{url()}}/img/Compartir-esprit.jpg" />
<meta property="og:description" content="Esprit Marca Alemana." />
<meta property="og:site_name" content="Esprit - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop