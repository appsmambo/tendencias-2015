@extends('layouts.desktop')
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/only/logo.png" class="img-responsive center-block" alt="Only" />
		<p>
			Con actitud desde Dinamarca. Así se presenta esta marca obsesionada con todo lo denim. Sus colecciones respiran personalidad, vinculación con el mundo real y modernidad. Eso, sumado a unos atractivos diseños que cruzan fronteras, resultan en un éxito seguro.
		</p>
		<a href="http://only.com/?forcecountry=GB&redirected=1" target="_blank"><img src="{{url()}}/img/marcas/only/boton.jpg" class="img-responsive center-block" alt="Only" /></a>
	</div>
</div>
<img src="{{url()}}/img/marcas/only/banner.jpg" class="img-responsive" alt="Only" />
@stop

@section('metas')
<title>Only - Las mejores marcas en Ripley</title>
<meta name="description" content="Con actitud desde Dinamarca. Así se presenta esta marca obsesionada con todo lo denim. Sus colecciones respiran personalidad, vinculación con el mundo real y modernidad. Eso, sumado a unos atractivos diseños que cruzan fronteras, resultan en un éxito seguro." />

<!-- Google -->
<meta itemprop="name" content="Only - Las mejores marcas en Ripley">
<meta itemprop="description" content="Con actitud desde Dinamarca. Así se presenta esta marca obsesionada con todo lo denim. Sus colecciones respiran personalidad, vinculación con el mundo real y modernidad. Eso, sumado a unos atractivos diseños que cruzan fronteras, resultan en un éxito seguro.">
<meta itemprop="image" content="{{url()}}/img/Compartir-only.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Only - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/only" />
<meta property="og:image" content="{{url()}}/img/Compartir-only.jpg" />
<meta property="og:description" content="Con actitud desde Dinamarca. Así se presenta esta marca obsesionada con todo lo denim. Sus colecciones respiran personalidad, vinculación con el mundo real y modernidad. Eso, sumado a unos atractivos diseños que cruzan fronteras, resultan en un éxito seguro." />
<meta property="og:site_name" content="Only - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop
