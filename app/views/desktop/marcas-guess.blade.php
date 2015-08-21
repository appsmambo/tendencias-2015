@extends('layouts.desktop')
@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 marcas-nuevas">
		<img src="{{url()}}/img/marcas/guess/logo.png" class="img-responsive center-block" alt="Guess" />
		<p>
			Sexy, joven y atrevida. En todo el mundo se conoce esta marca ícono de la moda estadounidense. Su controvertido estilo y comunicación se ha expandido por todo el mundo desde su lanzamiento a comienzo de los años 80.
		</p>
		<a href="http://www.guess.com/" target="_blank"><img src="{{url()}}/img/marcas/guess/boton.jpg" class="img-responsive center-block" alt="Guess" /></a>
		<a href="#marca-contenido" class="bajar">
			<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
		</a>
	</div>
</div>
<div id="marca-contenido">
	<img src="{{url()}}/img/marcas/guess/banner.jpg" class="img-responsive" alt="Guess" />
</div>
@stop

@section('metas')
<title>Guess - Las mejores marcas en Ripley</title>
<meta name="description" content="Sexy, joven y atrevida. En todo el mundo se conoce esta marca ícono de la moda estadounidense. Su controvertido estilo y comunicación se ha expandido por todo el mundo desde su lanzamiento a comienzo de los años 80." />

<!-- Google -->
<meta itemprop="name" content="Guess - Las mejores marcas en Ripley" />
<meta itemprop="description" content="Sexy, joven y atrevida. En todo el mundo se conoce esta marca ícono de la moda estadounidense. Su controvertido estilo y comunicación se ha expandido por todo el mundo desde su lanzamiento a comienzo de los años 80." />
<meta itemprop="image" content="{{url()}}/img/Compartir-guess.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/marcas/guess" />
<meta property="og:title" content="Guess - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/marcas/guess" />
<meta property="og:image" content="{{url()}}/img/Compartir-guess.jpg" />
<meta property="og:description" content="Sexy, joven y atrevida. En todo el mundo se conoce esta marca ícono de la moda estadounidense. Su controvertido estilo y comunicación se ha expandido por todo el mundo desde su lanzamiento a comienzo de los años 80." />
<meta property="og:site_name" content="Guess - Las mejores marcas en Ripley" />
<meta property="fb:admins" content="100008010128050" />
@stop
