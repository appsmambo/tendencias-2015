@extends('layouts.desktop')
@section('content')
<div id="sarah">
	<img src="{{url()}}/img/sarah/1.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
	<a href="#sjpVideo" class="bajar">
		<img src="{{url()}}/img/bajar.png" class="img-responsive center-block" alt="" />
	</a>
	<div class="row contenedor">
		<div class="col-sm-6 col-sm-offset-6" style="height:100%">
			<p>
				&nbsp;
			</p>
			<div class="row" style="height:100%">
				<div class="col-sm-10" style="height:100%">
					<div class="compartir-sarah text-center">
						<img src="{{url()}}/img/sarah/compartelo.png"  alt="Compartir" class="compartir" />
						<a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/sjp" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
						<a href="https://twitter.com/home?status=Sarah%20Jessica%20Parker%20nos%20muestra%20su%20lado%20m%C3%A1s%20cercano%20y%20nos%20ense%C3%B1a%20todo%20lo%20que%20sabe%20sobre%20su%20pasi%C3%B3n:%20La%20Moda.%20Ingresa%20http://bit.ly/1NlXVaP" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
						<a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/sjp&media=http://modaripley.com/tendencias/img/Compartir-sjp.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
						<a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/sjp" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="sjpVideo" class="video-contenedor">
	<a class="play" href="#" style="background-image:url('{{url()}}/img/sarah/2.jpg')" id="sarah-1"></a>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0&enablejsapi=1" id="video-1"></iframe>
	</div>
</div>
<div class="video-contenedor">
	<a class="play" href="#" style="background-image:url('{{url()}}/img/sarah/3.jpg')" id="sarah-2"></a>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/Xzw_XdzCQUk?rel=0&enablejsapi=1" id="video-2"></iframe>
	</div>
</div>
@stop

@section('metas')
<title>Sarah Jessica Parker, la nueva imagen de Ripley</title>
<meta name="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />

<!-- Google -->
<meta itemprop="name" content="Sarah Jessica Parker, la nueva imagen de Ripley" />
<meta itemprop="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />
<meta itemprop="image" content="{{url()}}/img/Compartir-sjp.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/sjp" />
<meta property="og:locale" content="es_ES" />
<meta property="og:title" content="Sarah Jessica Parker, la nueva imagen de Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/sjp" />
<meta property="og:image" content="{{url()}}/img/Compartir-sjp.jpg" />
<meta property="og:description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="og:site_name" content="Sarah Jessica Parker nos muestra su lado mas cercano y nos enseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="fb:admins" content="100008010128050" />
<meta property="fb:app_id" content="843141755772705" />
@stop