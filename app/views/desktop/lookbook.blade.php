@extends('layouts.desktop')
@section('content')
<div id="lookbooks" >
<?php 
    $numitemsxPatron=14;
    $numpatron=intval($numreg/14)+1;

    //6

    //echo("numpatron:" . $numpatron);
    //var_dump($productos);
    //echo($productos[0]->nombrelook);
    function contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria){
        $prod='<img src="'. url() .'/img/lookbook/fotos/' . $imagen .'" class="img-responsive" alt="'. $nombrelook .'" />
                                <div class="detalle-item">
                                    <a href="'. url() . '/lookbook/'. $idlook .'/' . Str::slug($categoria) . '/' . Str::slug($nombrelook) . '">
                                        <div class="fondo-item"></div>
                                        <div class="content-a-look">
                                            <div class="content-b-look"><img src="' . url() . '/img/lookbook/' . $imagenmarca .'" class="img-responsive"/></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="redes-look">
                                    <img src="'.  url() .'/img/compartir.png"  alt="compartir" />
                                    <a href="https://www.facebook.com/sharer/sharer.php?u='. url()  .'/lookbook/'. $idlook .'/'. Str::slug($categoria) . '/' . Str::slug($nombrelook) . '" target="_blank"><img src="'. url() .'/img/facebook.png"  alt="facebook" /></a>
                                    <a href="https://twitter.com/home?status='. $textoTwitter .'" target="_blank"><img src="'. url() .'/img/twitter.png"  alt="twitter" /></a>
                                </div>';
        return $prod;
    }

    $numprod=0;

    for ($i = 1; $i <= $numpatron; $i++) {
?>
    <div class="row row-eq-height">

                        
                        <div class="item col-sm-3">
                            <?php if($numprod<$numreg) {?>
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
</div>


<?php
 
    }
?>
@stop