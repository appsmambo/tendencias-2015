<?php
if (!isset($itemactive))
    $itemactive = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="http://modaripley.com/favicon.ico">
        @yield('metas')
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="{{url()}}/css/mobile/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{url()}}/js/mobile/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="{{url()}}/js/mobile/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="{{url()}}/js/mobile/vendor/flexcroll/flexcrollstyles.css">
        <link rel="stylesheet" href="{{url()}}/js/mobile/vendor/magnific-popup/magnific-popup.css">
        <link href="{{url()}}/css/jquery.fancybox.css" rel="stylesheet" />
        <link href="{{url()}}/css/fontello.css" rel="stylesheet" />        
        <link href="{{url()}}/css/stylesm.css" rel="stylesheet" />

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
        <div class="solo-vertical oculto">
            <div class="solo-vertical-interno">  
                <img src="{{url()}}/images/rotame.png" alt="" class="">
            </div>
        </div>
        <div class="externo">
            <div id="navigation">
                <nav class="menu-total">
                    <div class="menu-movil boton-movil">
                        <a class="btn-menu-movil boton"><i class="icon-menu-1"></i></a>
                    </div>
                    <ul class="menu-movil-total">
                        <li class="menu-logo-top"><a href="{{url()}}/" class="menu-logo"><img class="img-responsive" alt="" src="{{url()}}/images/ripley-header.jpg"></a></li>
                        <li><a href="{{url()}}/sjp" @if(Route::current()->getName() == 'sarah') class="active" @endif>Sarah Jessica</a></li>
                        <li><a href="{{url()}}/marcas" @if(Route::current()->getName() == 'marcas') class="active" @endif>Marcas</a></li>
                        <li><a href="{{url()}}/lookbook" @if(Route::current()->getName() == 'lookbook') class="active" @endif>LookBook</a></li>
                        <li><a href="{{url()}}/accesorios" @if(Route::current()->getName() == 'accesorios') class="active" @endif>Accesorios</a></li>
                        <li><a href="{{url()}}/revista" @if(Route::current()->getName() == 'revista') class="active" @endif>Revista</a></li>
                    </ul>
                    <div class="menu-redes-sociales">
                        <ul>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-twitter"></i></a></li>
                            <li><a href=""><i class="icon-pinterest"></i></a></li>
                            <li><a href=""><i class="icon-gplus"></i></a></li>
                            <li><a href=""><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu">
                <div class="menu-movil boton-movil">
                    <a class="btn-menu-movil boton"><i class="icon-menu-1"></i></a>
                </div>
            </div>
            <div class="redes-sociales">
                
            </div> 
                @yield('content')
            <footer style="bottom:0;">
                <a href="{{url()}}"><img src="{{url()}}/images/logo-footer.png" alt=""></a>
            </footer> 
        </div> 
        <script src="{{url()}}/js/mobile/jquery-1.11.1.min.js" ></script>
        <script src="{{url()}}/js/mobile/bootstrap.min.js"></script>
        <script src="{{url()}}/js/mobile/jquery.mobile-1.4.5.min.js"></script>
        <script src="{{url()}}/js/mobile/PxLoader.js"></script>  
        <script src="{{url()}}/js/mobile/PxLoaderImage.js"></script> 
        <script src="{{url()}}/js/mobile/vendor/jquery.easing.1.3.js"></script>
        <script src="{{url()}}/js/mobile/vendor/imagesloaded.3.1.8.min.js"></script>
        <script src="{{url()}}/js/mobile/vendor/jquery.masonry.3.2.1.min.js"></script>
        <script src="{{url()}}/js/mobile/vendor/owl-carousel/owl.carousel.min.js"></script>
        <script src="{{url()}}/js/mobile/vendor/magnific-popup/jquery.magnific-popup.js"></script>        
        <script src="{{url()}}/js/mobile/vendor/flexcroll/flexcroll.js"></script>
        <script src="{{url()}}/js/jquery.fancybox.js"></script>
        <script src="{{url()}}/js/mobile/blockui.js"></script>
        <script src="{{url()}}/js/funcionesm.js"></script>
        
        
        @if(Route::current()->getName() == 'revista')
            <style type="text/css">
                footer{
                    position: fixed;
                    bottom: 0;
                }
                .absolute-revista{
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
                .content-a{
                    display: table;
                    height: 100%;
                }
                .content-b{
                    display: table-cell;
                    vertical-align: middle;
                }
            </style>
        @endif
        <script>
          function getWindowWidth(){
              return $( window ).width();
          }
          </script>
    </body>
</html>