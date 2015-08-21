@extends('layouts.desktop')
@section('content')
	<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/riverisland/logo.png" class="img-responsive center-block" alt="River Island" />
		<p>
			&nbsp;
		</p>
		<a href="http://www.riverisland.com/" target="_blank"><img src="{{url()}}/img/marcas/riverisland/boton.jpg" class="img-responsive center-block" alt="River Island" /></a>
	</div>
	<img src="{{url()}}/img/marcas/riverisland/banner.jpg" class="img-responsive" alt="River Island" />
</div>
@stop

@section('metas')
<title>River Island - Las mejores marcas en Ripley</title>
<meta name="description" content="River Island Marca Inglesa." />

<!-- Google -->
<meta itemprop="name" content="River Island - Las mejores marcas en Ripley" />
<meta itemprop="description" content="River Island Marca Inglesa." />
<meta itemprop="image" content="{{url()}}/img/Compartir-riverisland.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/river-island" />
<meta property="og:title" content="River Island - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/river-island" />
<meta property="og:image" content="{{url()}}/img/Compartir-riverisland.jpg" />
<meta property="og:description" content="River Island Marca Inglesa." />
<meta property="og:site_name" content="River Island - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop