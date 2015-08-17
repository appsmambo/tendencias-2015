@extends('layouts.desktop')
@section('content')
<div id="banner-accesorios">
                        <img src="{{url()}}/img/accesorios/banner.jpg" class="img-responsive" alt="Accesorios" />
                        <div class="compartir-accesorios">
                            <div>COMPARTIR</div>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=http://modaripley.com/tendencias/accesorios" target="_blank"><img src="{{url()}}/img/facebook.png" alt="facebook" /></a>
                            <a href="https://twitter.com/home?status=Los%20accesorios%20que%20debes%20tener%20esta%20temporada:%20Carteras,%20Zapatos%20y%20mucho%20mas" target="_blank"><img src="{{url()}}/img/twitter.png" alt="twitter" /></a>
                            <a href="https://pinterest.com/pin/create/button/?url=http://modaripley.com/tendencias/accesorios&media=http://modaripley.com/tendencias/img/accesorios/banner.jpg&description=" target="_blank"><img src="{{url()}}/img/pinterest.png" alt="pinterest" /></a>
                            <a href="https://plus.google.com/share?url=http://modaripley.com/tendencias/accesorios" target="_blank"><img src="{{url()}}/img/google.png" alt="google plus" /></a>
                        </div>
                    </div>
                    <div class="row no-gutter accesorios-content">
                        <div class="col-sm-4">
                            <img src="{{url()}}/img/accesorios/1.jpg" class="img-responsive" alt="Accesorios" />
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/2" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/2.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/3" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/3.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/4" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/4.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{url()}}/img/accesorios/5.jpg" class="img-responsive" alt="Accesorios" />
                        </div>
                        <div class="col-sm-4">
                            <img src="{{url()}}/img/accesorios/6.jpg" class="img-responsive" alt="Accesorios" />
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/7" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/7.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/8" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/8.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/9" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/9.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/10" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/10.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{url()}}/img/accesorios/11.jpg" class="img-responsive" alt="Accesorios" />
                        </div>
                        <div class="col-sm-4">
                            <a href="{{url()}}/accesorios/12" data-fancybox-type="ajax" class="fancybox fancybox.ayax"><img src="{{url()}}/img/accesorios/12.jpg" class="img-responsive" alt="Accesorios" /></a>
                        </div>
</div>
@stop

@section('metas')
<title>Yo elijo mis accesorios</title>
<meta name="description" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas" />

<!-- Google -->
<meta itemprop="name" content="Yo elijo mis accesorios">
<meta itemprop="description" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas">
<meta itemprop="image" content="{{url()}}/img/accesorios/banner.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Yo elijo mis accesorios" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/img/accesorios/banner.jpg" />
<meta property="og:description" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas" />
<meta property="og:site_name" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas" />
<meta property="fb:admins" content="100008010128050" />
@stop