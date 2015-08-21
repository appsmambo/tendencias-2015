<?php
if (!isset($itemactive))
	$itemactive = 0;

if (!isset($producto)){
	$catelook="";
}else{
	$catelook=$producto[0]->nombre;
}

?>
<!DOCTYPE html>
<html>
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
			ga('create', 'UA-66587720-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<script>
			!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','//connect.facebook.net/en_US/fbevents.js');
			fbq('init', '118880601776827');
			fbq('track', 'PageView');
		</script>
		<script src="{{url()}}/js/queryloader2.min.js"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
				new QueryLoader2(document.querySelector("body"), {
					barColor:"#fff",
					backgroundColor:"#000",
					percentage:false,
					barHeight:1,
					minimumTime:250,
					maxTime:45000,
					fadeOutTime:1000,
					onComplete:function() {
						@if(Route::current()->getName() == 'marcas' or Route::current()->getName() == 'lookbook' or Route::current()->getName() == 'detallelook')
						setTimeout(function () {
							$(".bar-toogle").trigger("click");
						}, 5000);
						@endif
					}
				});
			});
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
							<a href="{{url()}}/marcas" @if(Route::current()->getName() == 'marcas' ) class="active" @endif>MARCAS</a>
							<ul @if(Route::current()->getName() == 'marcas')class="listas-desplegadas" @endif>
								<li><a href="{{url()}}/marcas/marquis" @if($itemactive==1) class="active" @endif>Marquis</a></li>
								<li><a href="{{url()}}/marcas/navigata" @if($itemactive==2) class="active" @endif>Navigata</a></li>
								<li><a href="{{url()}}/marcas/tatienne" @if($itemactive==3) class="active" @endif>Tatienne</a></li>
								<li><a href="{{url()}}/marcas/cacharel" @if($itemactive==4) class="active" @endif>Cacharel</a></li>
								<li><a href="{{url()}}/marcas/index" @if($itemactive==5) class="active" @endif>Index</a></li>
								<li><a href="{{url()}}/marcas/barbados" @if($itemactive==6) class="active" @endif>Barbados</a></li>
								<li><a href="{{url()}}/marcas/pepejeans" @if($itemactive==7) class="active" @endif>pepe jeans</a></li>
								<li><a href="{{url()}}/marcas/river-island" @if($itemactive==8) class="active" @endif>River Island</a></li>
								<li><a href="{{url()}}/marcas/esprit" @if($itemactive==9) class="active" @endif>Esprit</a></li>
								<li><a href="{{url()}}/marcas/veromoda" @if($itemactive==10) class="active" @endif>Veromoda</a></li>
								<li><a href="{{url()}}/marcas/tennis" @if($itemactive==11) class="active" @endif>Tennis</a></li>
								<li><a href="{{url()}}/marcas/guess" @if($itemactive==12) class="active" @endif>Guess</a></li>
								<li><a href="{{url()}}/marcas/only" @if($itemactive==13) class="active" @endif>Only</a></li>
							</ul>
						</li>
						<li>
							<a href="{{url()}}/lookbook" @if(Route::current()->getName() == 'lookbook') class="active" @endif>LOOKBOOK</a>
							<ul @if(Route::current()->getName() == 'lookbook' or $catelook!="" )class="listas-desplegadas" @endif>
								<li><a href="{{url()}}/lookbook/45/1/casaca-varadero" <?php if($catelook=="CASACAS"){?>class="active"<?php }?>>CASACAS</a></li>
								<li><a href="{{url()}}/lookbook/46/2/blusa-cool" <?php if($catelook=="TOPS"){?>class="active"<?php }?>>TOPS</a></li>
								<li><a href="{{url()}}/lookbook/37/3/pantalones-ciore" <?php if($catelook=="PANTALONES"){?>class="active"<?php }?>>PANTALONES</a></li>
								<li><a href="{{url()}}/lookbook/43/4/vestido-cierre" <?php if($catelook=="VESTIDOS"){?>class="active"<?php }?>>VESTIDOS</a></li>
								<li><a href="{{url()}}/lookbook/42/5/short-cuna" <?php if($catelook=="FALDAS Y SHORTS"){?>class="active"<?php }?>>FALDAS Y SHORTS</a></li>
							</ul>
						</li>
						<li>
							<a href="{{url()}}/accesorios" @if(Route::current()->getName() == 'accesorios') class="active" @endif>ACCESORIOS</a>
						</li>
						<li>
							<a href="{{url()}}/revista" @if(Route::current()->getName() == 'revista') class="active" @endif>REVISTA</a>
						</li>
					</ul>
				</div>
			</nav>
		</section>
		<section class="navs red">
			<div class="redes">
				<a onclick="ga('send', 'social', 'facebook');" href="https://www.facebook.com/RipleyPeru" target="_blank"><img src="{{url()}}/img/facebook.png" class="img-responsive" alt="facebook" /></a>
				<a onclick="ga('send', 'social', 'twitter');" href="https://twitter.com/ripleyenperu" target="_blank"><img src="{{url()}}/img/twitter.png" class="img-responsive" alt="twitter" /></a>
				<a onclick="ga('send', 'social', 'pinterest');" href="https://www.pinterest.com/ripleyperu/" target="_blank"><img src="{{url()}}/img/pinterest.png" class="img-responsive" alt="pinterest" /></a>
				<a onclick="ga('send', 'social', 'google+');" href="https://plus.google.com/+ripleyperu/posts" target="_blank"><img src="{{url()}}/img/google.png" class="img-responsive" alt="google plus" /></a>
				<a onclick="ga('send', 'social', 'instagram');" href="https://instagram.com/ripleyperu/" target="_blank"><img src="{{url()}}/img/instagram.png" class="img-responsive" alt="instagram" /></a>
			</div>
		</section>
		<div id="wrapper-content">
			<section id="wrapper" class="center-block">
				@yield('content')
			</section>
			<footer class="clearfix">
				<a href="http://modaripley.com/" target="_blank" class="pull-right"><img src="{{url()}}/img/logo-footer.png" class="img-responsive" alt="RIpley" /></a>
			</footer>
		</div>
		<script src="{{url()}}/js/jquery.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/jquery.bxslider.js"></script>
		<script src="{{url()}}/js/jquery.fancybox.js"></script>
		<script src="{{url()}}/js/jquery.rwdImageMaps.min.js"></script>
		<script src="{{url()}}/js/jquery.smooth-scroll.min.js"></script>
		<script src="{{url()}}/js/funciones.js"></script>
		@if(Route::current()->getName() == 'marcas' or Route::current()->getName() == 'lookbook' or Route::current()->getName() == 'detallelook')
		<script>
			$(document).ready(function () {
				$('.navs.yellow').addClass('nav-ancho easeOutExpo animated');
				$('nav.header').addClass('left-margin');
				$('.bar-toogle').addClass('active');
				$('.navs .menu-list').delay(250).fadeIn('slow');
			});
		</script>
		@endif
		@if(Route::current()->getName() == 'home')
		<script>
			$(document).ready(function() {
				$.fancybox({
					type:'inline',
					href:'#sjp-intro',
					padding:8,
					autoHeight:true,
					autoWidth:true,
					maxWidth:1184,
					maxHeight:2094
				});
			});
		</script>
		@endif
		<script>
			function getWindowWidth(){
				return $( window ).width();
			}
		</script>
		<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=118880601776827&ev=PageView&noscript=1"/></noscript>
	</body>
</html>