@extends('layouts.mobile')
@section('content')
<?php 
$accesorios = array(
    "1" => array(
        "marca" => 'barbados.png',
        "nombre" => "Vestido a rayas<br/> frunce",
        "sku" => "cod.93728639",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 79.9</span>',
        "imagen" => 'Sandalia-Tabihebi-marquis.jpg',
        ),
   "2" => array(
        "marca" => 'barbados.png',
        "nombre" => "Zapato Iris",
        "sku" => "cod.16909255",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 99.9</span>',
        "imagen" => 'Zapato-Iris-marquis.jpg',
        ),
   "3" => array(
        "marca" => 'marquis.png',
        "nombre" => "Sandalia Tabihebi",
        "sku" => "cod.16872543",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 189</span>',
        "imagen" => 'Sandalia-Tabihebi-marquis.jpg',
        ),
   "4" => array(
        "marca" => 'barbados.png',
        "nombre" => "Sandalia Rafaella",
        "sku" => "cod.16829389",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 99.9</span>',
        "imagen" => 'Sandalia-Rafaella-barbados.jpg',
        ),
	"5" => array(
        "marca" => 'marquis.png',
        "nombre" => "Carteras Malena",
        "sku" => "cod.16900629",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 99.9</span>',
        "imagen" => 'Carteras-Malena.jpg',
        ),
   "7" => array(
        "marca" => 'marquis.png',
        "nombre" => "Sandalia Dalia",
        "sku" => "cod.16997246",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 139</span>',
        "imagen" => 'Sandalia-Dalia-marquis.jpg',
        ),
   "8" => array(
        "marca" => 'marquis.png',
        "nombre" => "Sandalia Apli",
        "sku" => "cod.16872517",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 259</span>',
        "imagen" => 'Sandalia-Apli-marquis.jpg',
        ),
   "9" => array(
        "marca" => 'marquis.png',
        "nombre" => "Alpargata Sonia",
        "sku" => "cod.16912774",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 89.9</span>',
        "imagen" => 'Alpargata-Sonia-marquis.jpg',
        ),
   "10" => array(
        "marca" => 'marquis.png',
        "nombre" => "Sandalia alberca",
        "sku" => "cod.17020357",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 149</span>',
        "imagen" => 'Sandalia-alberca-marquis.jpg',
        ),
   "11" => array(
        "marca" => 'marquis.png',
        "nombre" => "Alpargata Sonia",
        "sku" => "cod.16912774",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 89.9</span>',
        "imagen" => 'Alpargata-Sonia-marquis.jpg',
        ),
   "12" => array(
        "marca" => 'marquis.png',
        "nombre" => "Sandalia Franca",
        "sku" => "cod.17017645",
        "precio" => '<span>PRECIO NORMAL </span><br><span class="red">S/. 149</span>',
        "imagen" => 'Sandalia-franca-marquis.jpg',
        )
   );
?>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-sm-12">
                <div class="wrapper-interno">
                    <div class="header-movil">
                        <div class="menu-movil">
                            <a class="btn-menu-movil boton"><i class="icon-menu-1"></i></a>
                        </div>
                        <div class="tema">
                            <a href="{{url()}}"><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href="{{url()}}"><img src="images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>                    
                    <div class="panel-elije-tu-marca clearfix" id="elije-tu-marca">
                        <a href="">
                            <img src="{{url()}}/images/accesorios/bg.jpg" alt="" class="img-responsive">
                        </a>
                    </div>
                    <div class="panel-galeria-elije-tu-marca">
                        <div class="container-fluid">
                            <div class="row no-gutters"> 
                                <?php for ($i = 1; $i <= 12; $i++) :  ?>
                                <?php $indice = (string) $i; ?>                                                                
                                <?php $botonModal = (array_key_exists($indice, $accesorios)) ? "btn-accesorios-popup" : ""; ?>                                
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item-accesorios"> 
                                        <a class="<?php echo $botonModal; ?> boton" id="accesorios-pos-<?php echo  $i; ?>">
                                            <img src="{{url()}}/img/accesorios/<?php echo $i; ?>.jpg" alt="Accesorios" class="img-responsive">
                                        </a>
                                    </div>                                    
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>             
</div>   

<div class="panel-accesorio oculto-simple" id="accesorios">
    <div class="panel-accesorio-interno">
    <div class="panel-accesorio-close">
        <a class="btn-close-accesorio boton">X</a>
    </div>
    <div class="carousel slide touch-carousel" id="carousel-example-generic" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <?php for ($i= 1; $i <= 12; $i++): ?>
            <?php $indice = (string) $i; ?>
            <?php if (array_key_exists($indice, $accesorios)) : ?>
            <div class="item" id="popup-accesorios-pos-<?php echo  $i; ?>">
                <div class="panel-accesorio-imagen">
                    <img src="{{url()}}/img/accesorios/<?php echo $i; ?>.jpg" alt="" class="img-responsive">
                </div>
                <div class="panel-accesorio-texto">
                    <div class="panel-accesorio-titulo"><img src="{{url()}}/img/accesorios/<?php echo $accesorios[$indice]['marca']; ?>" class="img-responsive"></div>
                    <div class="panel-accesorio-codigo"><p><?php echo $accesorios[$indice]['nombre']; ?></p><p><?php echo $accesorios[$indice]['sku']; ?></p></div>
                    <div class="panel-accesorio-precio">
                        <?php echo $accesorios[$indice]['precio']; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endfor; ?>            
        </div>                       
    </div>    
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
<meta property="og:url" content="{{url()}}/accesorios" />
<meta property="og:image" content="{{url()}}/img/accesorios/banner.jpg" />
<meta property="og:description" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas" />
<meta property="og:site_name" content="Los accesorios que debes tener esta temporada: Carteras, Zapatos y mucho mas" />
<meta property="fb:admins" content="100008010128050" />
@stop