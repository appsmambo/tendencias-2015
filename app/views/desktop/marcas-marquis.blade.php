@extends('layouts.marcas')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/marquis/banner.jpg" class="img-responsive" alt="Navigata" />
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a onclick="ga('send', 'social', 'facebook', 'link', '{{url()}}/sjp');" href="{{url()}}/sjp" target="_blank"><img src="{{url()}}/img/marcas/facebook.png" alt="facebook" /></a>
			<a onclick="ga('send', 'social', 'facebook', 'link', '{{url()}}/sjp');" href="{{url()}}/sjp" target="_blank"><img src="{{url()}}/img/marcas/twitter.png" alt="twitter" /></a>
			<a onclick="ga('send', 'social', 'facebook', 'link', '{{url()}}/sjp');" href="{{url()}}/sjp" target="_blank"><img src="{{url()}}/img/marcas/pinterest.png" alt="pinterest" /></a>
			<a onclick="ga('send', 'social', 'facebook', 'link', '{{url()}}/sjp');" href="{{url()}}/sjp" target="_blank"><img src="{{url()}}/img/marcas/google.png" alt="google plus" /></a>
		</div>
	</div>
	<div id="freewall" class="free-wall">
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/marquis/1.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/marquis/2.jpg" alt="" />
		</div>
		<div class="item-marca w3">
			<img src="{{url()}}/img/marcas/marquis/3.jpg" alt="" />
		</div>
		<div class="item-marca w5">
			<img src="{{url()}}/img/marcas/marquis/4.jpg" alt="" />
		</div>
		<div class="item-marca w8">
			<img src="{{url()}}/img/marcas/marquis/5.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/6.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/7.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/8.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/9.jpg" alt="" />
		</div>
		<div class="item-marca w4">
			<img src="{{url()}}/img/marcas/marquis/10.jpg" alt="" />
		</div>
	</div>
	

</div>
@stop

@section('metas')
<title>Ripley, tendencias 2015</title>
<meta name="description" content="Ripley, tendencias 2015" />

<!-- Google -->
<meta itemprop="name" content="Ripley, tendencias 2015">
<meta itemprop="description" content="Ripley, tendencias 2015">
<meta itemprop="image" content="{{url()}}/ripley-tendencias-2015.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Ripley, tendencias 2015" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/ripley-tendencias-2015.jpg" />
<meta property="og:description" content="Ripley, tendencias 2015" />
<meta property="og:site_name" content="Ripley, tendencias 2015" />
<meta property="fb:admins" content="100008010128050" />
@stop