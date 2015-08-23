@extends('layouts.desktop')
@section('content')
<div id="lookbooks" >
<?php 

	//$numreg=46;
    $numitemsxPatron=14;
    $numpatron=intval($numreg/14)+1;

    //6

    //echo("numpatron:" . $numpatron);
    //var_dump($productos);
    //echo($productos[0]->nombrelook);
    function contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria){
        $prod='<img src="'. url() .'/img/lookbook/portada/' . Str::slug($imagen) .'.jpg" class="img-responsive" alt="'. $nombrelook .'" />
                                <div class="detalle-item">
                                    <a href="'. url() . '/lookbook/'. $idlook .'/' . Str::slug($categoria) . '/' . Str::slug($nombrelook) . '">
                                        <div class="fondo-item"></div>
                                        <div class="content-a-look">
                                            <div class="content-b-look"><img src="' . url() . '/img/lookbook/marcas/' . $imagenmarca .'" class="img-responsive"/></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="redes-look">
                                    <img src="'.  url() .'/img/lookbook/compartelo.png"  alt="compartir" class="compartir-lookbook" />
                                    <a href="https://www.facebook.com/sharer/sharer.php?u='. url()  .'/lookbook/'. $idlook .'/'. Str::slug($categoria) . '/' . Str::slug($nombrelook) . '" target="_blank"><img src="'. url() .'/img/facebook.png"  alt="facebook" /></a>
                                    <a href="https://twitter.com/home?status='. $textoTwitter .'" target="_blank"><img src="'. url() .'/img/twitter.png"  alt="twitter" /></a>
                                </div>';
        return $prod;
    }

    $numprod=-1;

    for ($i = 1; $i <= $numpatron; $i++) {
?>
    <div class="row row-eq-height">
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-6">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3 last">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
    </div>
    <div class="row row-eq-height" data-columns="15">
                        
                        <div class="item col-sm-6">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-6 last">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
    </div>
    <div class="row row-eq-height">
                        
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-6">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3 last">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        

    </div>
    <div class="row row-eq-height">
                        
                        <div class="item col-sm-6">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-3">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
                        <div class="item col-sm-6 last">
                            <?php 
                            $numprod++;        
                            if($numprod<$numreg) {?>
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            <?php }?>
                        </div>
                        
                        
    </div>



<?php
 
    }
?>

</div>
@stop

@section('metas')
<title>Lookbook Primavera Verano 2015 - 2016.</title>
<meta name="description" content="Descubre las últimas temporadas de las mejores marcas: Marquis, Cacharel, Tatienne, Index, Barbados, Navigata y Pepe Jeans" />

<!-- Google -->
<meta itemprop="name" content="Lookbook Primavera Verano 2015 - 2016." />
<meta itemprop="description" content="Descubre las últimas temporadas de las mejores marcas: Marquis, Cacharel, Tatienne, Index, Barbados, Navigata y Pepe Jeans" />
<meta itemprop="image" content="{{url()}}/img/Compartir-lookbook.jpg" />

<!-- Open Graph data -->
<link rel="canonical" href="{{url()}}/lookbook" />
<meta property="og:title" content="Lookbook Primavera Verano 2015 - 2016." />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}/lookbook" />
<meta property="og:image" content="{{url()}}/img/Compartir-lookbook.jpg" />
<meta property="og:description" content="Descubre las últimas temporadas de las mejores marcas: Marquis, Cacharel, Tatienne, Index, Barbados, Navigata y Pepe Jeans" />
<meta property="og:site_name" content="Lookbook Primavera Verano 2015 - 2016." />
<meta property="fb:admins" content="100008010128050" />
@stop
