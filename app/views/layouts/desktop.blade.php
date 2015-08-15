<?php
if(!isset($itemactive)) $itemactive=0;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tendencias Ripley 2015</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage very simple demo." />
	<meta name="keywords"  content="fullpage,jquery,demo,simple" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url()}}/css/animate.css" rel="stylesheet">
    <link href="{{url()}}/css/jquery.bxslider.css" rel="stylesheet">
    <link href="{{url()}}/css/jquery.fancybox.css" rel="stylesheet">
	<link href="{{url()}}/css/styles.css" rel="stylesheet">



</head>
<body>
	 <section class="navs yellow">
        <nav class="header">
            <img src="{{url()}}/img/bar-toogle.png" class="img-responsive bar-toogle" alt="Bar Menu" />
            <div class="menu-list">
                <a class="logo-ripley-header" href="#"><img src="{{url()}}/img/ripley-header.jpg" class="img-responsive" alt="Logo Ripley" /></a>
                <ul class="list-unstyled">
                    <li><a href="{{url()}}/sarah-jessica-parker" @if(Route::current()->getName() == 'sarah') class="active" @endif>SARAH JESSICA</a></li>
                    <li>

                    	<a href="{{url()}}/marcas"  @if(Route::current()->getName() == 'marcas' ) class="active" @endif>MARCAS</a>
                    	 <ul @if(Route::current()->getName() == 'marcas')class="listas-desplegadas" @endif>
                            <li><a href="{{url()}}/marcas-marquis"  @if($itemactive==1) class="active" @endif>Marquis</a></li>
                            <li><a href="{{url()}}/marcas-navigata" @if($itemactive==2) class="active" @endif>Navigata</a></li>
                            <li><a href="{{url()}}/marcas-tatienne" @if($itemactive==3) class="active" @endif>Tatienne</a></li>
                            <li><a href="{{url()}}/marcas-cacharel" @if($itemactive==4) class="active" @endif>Cacharel</a></li>
                            <li><a href="{{url()}}/marcas-index" @if($itemactive==5) class="active" @endif>Index</a></li>
                            <li><a href="{{url()}}/marcas-barbados" @if($itemactive==6) class="active" @endif>Barbados</a></li>
                            <li><a href="{{url()}}/marcas-pepe-jeans" @if($itemactive==7) class="active" @endif>pepejeans.php</a></li>
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
                    <li><a href="{{url()}}/accesorios" @if(Route::current()->getName() == 'accesorios') class="active" @endif>ACCESORIOS</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="navs red">
        <div class="redes">
            <a href="#" target="_blank"><img src="{{url()}}/img/facebook.png" class="img-responsive" alt="facebook" /></a>
            <a href="#" target="_blank"><img src="{{url()}}/img/twitter.png" class="img-responsive" alt="twitter" /></a>
            <a href="#" target="_blank"><img src="{{url()}}/img/pinterest.png" class="img-responsive" alt="pinterest" /></a>
            <a href="#" target="_blank"><img src="{{url()}}/img/google.png" class="img-responsive" alt="google plus" /></a>
            <a href="#" target="_blank"><img src="{{url()}}/img/instagram.png" class="img-responsive" alt="instagram" /></a>
        </div>
    </section>
	<!--section id="wrapper">
		<div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-sm-10 contents">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
		
	</section-->
	<section id="wrapper" class="center-block">
		@yield('content')
	</section>
	<footer class="clearfix">
       <a href="#" class="pull-right"><img src="{{url()}}/img/logo-footer.png" class="img-responsive" alt="RIpley" /></a>
    </footer>
	<script type="text/javascript" src="{{url()}}/js/jquery.js"></script>
	<script type="text/javascript" src="{{url()}}/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{url()}}/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="{{url()}}/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="{{url()}}/js/jquery.rwdImageMaps.min.js"></script>
	

    @if(Route::current()->getName() == 'marcas' or Route::current()->getName() == 'lookbook')
    <script type="text/javascript">
        $(document).ready(function(){
            $( ".navs.yellow" ).addClass( "nav-ancho easeOutExpo animated");
            $("nav.header").addClass('left-margin');
            $( ".navs .menu-list" ).css("display", "block");
            $( ".bar-toogle" ).addClass("active");
        });

       
    </script>
      
    @endif

    <script type="text/javascript" src="{{url()}}/js/funciones.js"></script>
</body>
</html>