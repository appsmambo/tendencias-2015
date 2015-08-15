<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Celularte</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage very simple demo." />
	<meta name="keywords"  content="fullpage,jquery,demo,simple" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{url()}}/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{url()}}/css/galleriffic-2.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{url()}}/css/styles-mobile.css" />
	<link rel="stylesheet" href="{{url()}}/js/file-upload/css/jquery.fileupload.css" />
	<script type="text/javascript" src="{{url()}}/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="{{url()}}/js/blockui.js"></script>
	<script type="text/javascript" src="{{url()}}/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="{{url()}}/js/jquery.galleriffic.js"></script>
	<script type="text/javascript" src="{{url()}}/js/jquery.opacityrollover.js"></script>
	<script src="{{url()}}/js/file-upload/js/load-image.min.js"></script>
    <script src="{{url()}}/js/file-upload/js/canvas-to-blob.min.js"></script>
	<script src="{{url()}}/js/file-upload/js/vendor/jquery.ui.widget.js"></script>
	<script src="{{url()}}/js/file-upload/js/jquery.iframe-transport.js"></script>
	<script src="{{url()}}/js/file-upload/js/jquery.fileupload.js"></script>
	<script src="{{url()}}/js/file-upload/js/jquery.fileupload-process.js"></script>
	<script src="{{url()}}/js/file-upload/js/jquery.fileupload-image.js"></script>
	<script src="{{url()}}/js/file-upload/js/jquery.fileupload-validate.js"></script>

	@if(Route::current()->getName() == 'participa')
		<script language="javascript">
			baseUrl='{{url()}}/';	
		</script>
		<script src="{{url()}}/js/exif.js"></script>
	    <script type="text/javascript" src="{{url()}}/js/jquery.screwdefaultbuttonsV2.min.js"></script>
    	<script type="text/javascript" src="{{url()}}/js/funciones-registro.js"></script>
	@else
		
	@endif	
</head>
<body>
	<header>
		<div class="container">
			<div class="row clearfix">
				<div class="col-xs-7">
					<a href="{{url()}}/"><img src="{{url()}}/img/logo-mobile.jpg" alt="logo" class="img-responsive"/></a>
				</div>
				<div class="col-xs-5">
					<img src="{{url()}}/img/barra-menu.jpg" alt="barra-menu" class="barra-menu active img-responsive pull-right"/>
				</div>
			</div>
		</div>
	</header>
	<nav>
		<div class="container">
			<div class="row clearfix">
				<ul class="col-xs-12">
					<li class="selfie"><a href="{{url()}}/galeria/1">#selfie</a></li>
					<li class="gastronomia"><a href="{{url()}}/galeria/2">#Gastronomia</a></li>
					<li class="vidacotidiana"><a href="{{url()}}/galeria/3">#vidacotidiana</a></li>
					<li class="arte"><a href="{{url()}}/galeria/4">#Arte</a></li>
					<li class="mundoverde"><a href="{{url()}}/galeria/5">#Mundoverde</a></li>
					<li class="participa"><a href="{{url()}}/participa">#Participa</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="wrapper">
		@yield('content')
	</div>

		@if(Route::current()->getName() == 'galeria')
		<div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '1426453467683394',
                    cookie: true, xfbml: true,
                    channelUrl: 'http://www.tribecamediaperu.pe/facebook/ripley/mundial/facebook/channel.php',
                    status: true,
                    oauth: true
                });
            };
            (function() {
                var e = document.createElement('script');
                e.async = true;
                e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
		</script>
		<script type="text/javascript" src="{{url()}}/js/funcionesm.js"></script>
		<script type="text/javascript" src="{{url()}}/js/funciones-votar.js"></script>
		@endif

</body>
</html>