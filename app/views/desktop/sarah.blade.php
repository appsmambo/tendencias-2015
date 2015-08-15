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
							<a href="#" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
							<a href="#" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
							<a href="#" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
							<a href="#" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
							<a href="#" target="_blank"><img src="{{url()}}/img/instagram.png" alt="instagram" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="video-contenedor">
	<a class="play" href="#" style="background-image:url('{{url()}}/img/sarah/2.jpg')"></a>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0"></iframe>
	</div>
</div>
<div class="video-contenedor">
	<a class="play" href="#" style="background-image:url('{{url()}}/img/sarah/3.jpg')"></a>
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="//www.youtube.com/embed/Xzw_XdzCQUk?rel=0"></iframe>
	</div>
</div>
@stop