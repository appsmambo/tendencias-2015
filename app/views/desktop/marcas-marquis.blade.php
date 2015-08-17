@extends('layouts.desktop')
@section('content')
<div id="marcas-interna" >
	<div class="banner-marca">
		<img src="{{url()}}/img/marcas/marquis/banner.jpg" class="img-responsive" alt="Navigata" />
		<div class="sociales-marcas">
			<p>Compartir</p>
			<a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/marcas/marquis" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
			<a href="https://twitter.com/home?status=Ripley%20tendencias%202015%20Marquis" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
			<a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/marcas/marquis&media=http://modaripley.com/tendencias/img/marcas/marquis/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
			<a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/marcas/marquis" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
		</div>
	</div>
	<div class="row no-gutter fondo-blanco">
		<div class="col-sm-7 marca-left">
			<div class="video-marca">
				<img src="{{url()}}/img/marcas/marquis/video-1.jpg"  class="img-responsive" alt="facebook" />
				<!--iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe-->
			</div>
			<!--div class="embed-responsive embed-responsive-16by9 video-marca">
				
			  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/crKUcZio0-M?rel=0" allowfullscreen></iframe>
			</div-->
			<!--div class="fondo-marcas navigata">
				
			</div-->
			<div class="content-tendencias">
				<div class="content-tendencias-listas">
					<div class="content-tendencias-a">
						<ul>
							<li class="flecha"><img src="{{url()}}/img/marcas/marquis/flecha.png" class="img-responsive"  alt="Campañas" /></li>
							<li class="spring">TENDENCIA URBAN SAFARI<br>ítems de la temporada</li>
							<hr class="raya-amarilla">
							<li>blusas campesinas</li>
							<hr class="raya-negra">
							<li class="kimono">prints  florales</li>
							<hr class="raya-negra">
							<li >encajes</li>
							<hr class="raya-negra">
							<li class="kimono">kimonos</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-5 marca-right">
			<img src="{{url()}}/img/marcas/marquis/logo.jpg" class="img-responsive"  alt="Navigata" />
			<div class="precio-marca">
				<img src="{{url()}}/img/marcas/marquis/1.jpg" class="img-responsive"  alt="Navigata" />
				<div class="fondo-blanco-detalle">
					<div class="imagen-precio-detalle">
						<img src="{{url()}}/img/marcas/marquis/detalle-imagen.png" class="img-responsive"  alt="Imagen" />
						<p>
							<span>BlusaTennis S/.129</span><br/>
							25347345
						</p>
						<a href="#" target="_blank">Tendencia</a>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<img src="{{url()}}/img/marcas/marquis/video-2.jpg" class="img-responsive"  alt="Campañas" />
		<div class="col-sm-6">
			<img src="{{url()}}/img/marcas/marquis/2.jpg" class="img-responsive"  alt="Campañas" />
		</div>
		<div class="col-sm-6 content-tendencias-2">
			<img src="{{url()}}/img/marcas/marquis/border-yellow-2.jpg" class="img-responsive"  alt="Campañas" />
			<div class="content-tendencias-listas">
				<div class="content-tendencias-a">
					<ul>
						<li class="flecha"><img src="{{url()}}/img/marcas/marquis/flecha.png" class="img-responsive"  alt="Campañas" /></li>
						<li class="spring">TENDENCIA NEW STRIPES<br>ítems de la temporada</li>
						<hr class="raya-amarilla">
						<li>Culottes</li>
						<hr class="raya-negra">
						<li class="kimono">pantalones palazzo</li>
						<hr class="raya-negra">
						<li >shorts</li>
						<hr class="raya-negra">
						<li class="kimono">camisas fluidas</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-6 marca-left-2">
			<div class="video-marca">
				<img src="{{url()}}/img/marcas/marquis/3.jpg"  class="img-responsive" alt="facebook" />
			</div>
			<div class="content-tendencias-2">
				<img src="{{url()}}/img/marcas/marquis/border-yellow-3.jpg"  class="img-responsive" alt="facebook" />
				<div class="content-tendencias-listas">
					<div class="content-tendencias-a">
						<ul>
							<li class="flecha dos"><img src="{{url()}}/img/marcas/marquis/flecha.png" class="img-responsive"  alt="Campañas" /></li>
							<li class="spring">TENDENCIA URBAN SAFARI<br>ítems de la temporada</li>
							<hr class="raya-amarilla">
							<li>joggers</li>
							<hr class="raya-negra">
							<li class="kimono">prints  palmeras</li>
							<hr class="raya-negra">
							<li >vestidos camiseros</li>
							<hr class="raya-negra">
							<li class="kimono">kimonos</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 marca-right-2">
			<div class="precio-marca">
				<img src="{{url()}}/img/marcas/marquis/4.jpg" class="img-responsive"  alt="Navigata" />

			</div>
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
<meta property="og:title" content="Marquis - Las mejores marcas en Ripley" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/ripley-tendencias-2015.jpg" />
<meta property="og:description" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />
<meta property="og:site_name" content="Para la mujer independiente y segura de sí misma, que busca vestir con estilo en cualquier ocasión." />
<meta property="fb:admins" content="100008010128050" />
@stop