<?php
if (!isset($itemactive))
	$itemactive = 0;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="http://modaripley.com/favicon.ico">
		@yield('metas')
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet" />
		<link href="{{url()}}/css/animate.css" rel="stylesheet" />
		<link href="{{url()}}/css/jquery.bxslider.css" rel="stylesheet" />
		<link href="{{url()}}/css/jquery.fancybox.css" rel="stylesheet" />
		<link href="{{url()}}/css/styles.css" rel="stylesheet" />

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-50197344-2', 'auto');
		  ga('require', 'displayfeatures');
		  ga('send', 'pageview');

		</script>

	</head>
	<body>
		<section class="navs yellow">
			<nav class="header">
				<img src="{{url()}}/img/bar-toogle.png" class="img-responsive bar-toogle" alt="Bar Menu" />
				<div class="menu-list" style="display:none">
					<a class="logo-ripley-header" href="{{url()}}/"><img src="{{url()}}/img/ripley-header.jpg" class="img-responsive" alt="Logo Ripley" /></a>
					<ul class="list-unstyled">
						<li><a href="{{url()}}/sjp" @if(Route::current()->getName() == 'sarah') class="active" @endif>SARAH JESSICA</a></li>
						<li>
							<a href="{{url()}}/marcas"  @if(Route::current()->getName() == 'marcas' ) class="active" @endif>MARCAS</a>
							<ul @if(Route::current()->getName() == 'marcas')class="listas-desplegadas" @endif>
								<li><a href="{{url()}}/marcas/marquis"  @if($itemactive==1) class="active" @endif>Marquis</a></li>
								<li><a href="{{url()}}/marcas/navigata" @if($itemactive==2) class="active" @endif>Navigata</a></li>
								<li><a href="{{url()}}/marcas/tatienne" @if($itemactive==3) class="active" @endif>Tatienne</a></li>
								<li><a href="{{url()}}/marcas/cacharel" @if($itemactive==4) class="active" @endif>Cacharel</a></li>
								<li><a href="{{url()}}/marcas/index" @if($itemactive==5) class="active" @endif>Index</a></li>
								<li><a href="{{url()}}/marcas/barbados" @if($itemactive==6) class="active" @endif>Barbados</a></li>
								<li><a href="{{url()}}/marcas/pepejeans" @if($itemactive==7) class="active" @endif>pepe jeans</a></li>
							</ul>
						</li>
						<li>
							<a href="{{url()}}/lookbook" @if(Route::current()->getName() == 'lookbook') class="active" @endif>LOOKBOOK</a>
							<ul  @if(Route::current()->getName() == 'lookbook')class="listas-desplegadas" @endif>
								<li><a href="#">chaquetas</a></li>
								<li><a href="#" >VESTIDOS</a></li>
								<li><a href="#">blusas</a></li>
								<li><a href="#">tops</a></li>
								<li><a href="#">shorts</a></li>
								<li><a href="#">faldas</a></li>
								<li><a href="#">zapatos</a></li>
								<li><a href="#">bolsos</a></li>
							</ul>
						</li>
						<li>
							<a href="{{url()}}/accesorios" @if(Route::current()->getName() == 'accesorios') class="active" @endif>ACCESORIOS</a>
						</li>
					</ul>
				</div>
			</nav>
		</section>
		<section class="navs red">
			<div class="redes">
				<a onclick="ga('send', 'social', 'facebook', 'link', '{{url()}}/');" href="https://www.facebook.com/RipleyPeru" target="_blank"><img src="{{url()}}/img/facebook.png" class="img-responsive" alt="facebook" /></a>
				<a onclick="ga('send', 'social', 'twitter', 'link', '{{url()}}/');" href="https://twitter.com/ripleyenperu" target="_blank"><img src="{{url()}}/img/twitter.png" class="img-responsive" alt="twitter" /></a>
				<a onclick="ga('send', 'social', 'pinterest', 'link', '{{url()}}/');" href="https://www.pinterest.com/ripleyperu/" target="_blank"><img src="{{url()}}/img/pinterest.png" class="img-responsive" alt="pinterest" /></a>
				<a onclick="ga('send', 'social', 'google+', 'link', '{{url()}}/');" href="https://plus.google.com/+ripleyperu/posts" target="_blank"><img src="{{url()}}/img/google.png" class="img-responsive" alt="google plus" /></a>
				<a onclick="ga('send', 'social', 'instagram', 'link', '{{url()}}/');" href="https://instagram.com/ripleyperu/" target="_blank"><img src="{{url()}}/img/instagram.png" class="img-responsive" alt="instagram" /></a>
			</div>
		</section>
		<section id="wrapper" class="center-block">
			@yield('content')
		</section>
		<footer class="clearfix">
			<a href="http://modaripley.com/" target="_blank" class="pull-right"><img src="{{url()}}/img/logo-footer.png" class="img-responsive" alt="RIpley" /></a>
		</footer>
		<script src="{{url()}}/js/jquery.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/jquery.bxslider.js"></script>
		<script src="{{url()}}/js/jquery.fancybox.js"></script>
		<script src="{{url()}}/js/jquery.rwdImageMaps.min.js"></script>
		<script src="{{url()}}/js/funciones.js"></script>
		@if(Route::current()->getName() == 'marcas' or Route::current()->getName() == 'lookbook')
		<script>
			$(document).ready(function () {
				$('.navs.yellow').addClass('nav-ancho easeOutExpo animated');
				$('nav.header').addClass('left-margin');
				$('.bar-toogle').addClass('active');
				$('.navs .menu-list').delay(250).fadeIn('slow');
			});
			setTimeout(function(){
				 $(".bar-toogle").trigger("click");
			}, 5000);
		</script>
		@endif
		<script>
		  function getWindowWidth(){
		      return $( window ).width();
		  }
		  </script>
	</body>
</html>