@extends('layouts.desktop')
@section('content')
<div id="sarah">
	<img src="{{url()}}/img/sarah/1.jpg" class="img-responsive" alt="Sarah Jessica Parker" />
	<div class="content-a">
		<div class="content-b">
			<div class="content-c">
				<div class="row">
					<div class="col-sm-5 col-sm-offset-6 text-center">
						<img src="{{url()}}/img/sarah/titulo.png" class="img-responsive titulo" alt="" />
						<span class="nueva-imagen">NUEVA IMAGEN DE RIPLEY</span>
						<p>
							Actriz, modelo, editora de moda... es todo lo que conocemos de ella. Pero ahora, Sarah Jessica llega a Ripley para mostrarnos su lado más cercano y enseñarnos todo lo que sabe sobre su pasíón: La Moda.
						</p>
						<span class="medium">#bienvenida</span><span>SJP</span>
						<div class="compartir-sarah">
							<img src="{{url()}}/img/sarah/compartelo.png"  alt="Compartir" class="compartir" />
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/sjp" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
							<a href="https://twitter.com/home?status=Sarah%20Jessica%20Parker%20nos%20muestra%20su%20lado%20mas%20cercano%20y%20nosense%C3%B1a%20todo%20lo%20que%20sabe%20sobre%20su%20pasi%C3%B3n:%20La%20Moda.%20Ingresa%20a%20http://bit.ly/1NlXVaP" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
							<a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/sjp&media=http://modaripley.com/tendencias/img/sarah/1.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
							<a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/sjp" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="video-contenedor">
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
<meta name="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nosenseña todo lo que sabe sobre su pasión: La Moda." />

<!-- Google -->
<meta itemprop="name" content="Sarah Jessica Parker, la nueva imagen de Ripley">
<meta itemprop="description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nosenseña todo lo que sabe sobre su pasión: La Moda.">
<meta itemprop="image" content="{{url()}}/img/sarah/1jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Sarah Jessica Parker, la nueva imagen de Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/img/sarah/1.jpg" />
<meta property="og:description" content="Sarah Jessica Parker nos muestra su lado mas cercano y nosenseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="og:site_name" content="Sarah Jessica Parker nos muestra su lado mas cercano y nosenseña todo lo que sabe sobre su pasión: La Moda." />
<meta property="fb:admins" content="100008010128050" />
@stop