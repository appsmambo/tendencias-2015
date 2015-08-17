@extends('layouts.desktop')
@section('content')
<a href="{{url()}}/sjp" title="Sarah Jessica Parker">
	<img src="{{url()}}/img/home/1.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
</a>
<a href="{{url()}}/marcas" title="Marcas">
	<img src="{{url()}}/img/home/2.jpg" class="img-responsive center-block" alt="Marcas" />
</a>
<a href="{{url()}}/lookbook" title="Lookbook">
	<img src="{{url()}}/img/home/3.jpg" class="img-responsive center-block" alt="Lookbook" />
</a>
<a href="{{url()}}/accesorios" title="Accesorios">
	<img src="{{url()}}/img/home/4.jpg" class="img-responsive center-block" alt="Accesorios" />
</a>
@stop

@section('metas')
<title>Yo elijo las mejores marcas - Tendencias 2015 - Ripley</title>
<meta name="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />

<!-- Google -->
<meta itemprop="name" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley">
<meta itemprop="description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. ">
<meta itemprop="image" content="{{url()}}/img/home/1.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Yo elijo las mejores marcas - Tendencias 2015 - Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/" />
<meta property="og:image" content="{{url()}}/img/home/1.jpg" />
<meta property="og:description" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />
<meta property="og:site_name" content="Descubre las últimas tendencias de la moda, temporada Primavera Verano 2015 - 2016, solo en Ripley. " />
<meta property="fb:admins" content="100008010128050" />
@stop