@extends('layouts.mobile')
@section('content')



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
                            <a href=""><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href=""><img src="{{url()}}/images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    
                    <div class="panel-galeria clearfix" id="galeria">
                        <?php 
                            $numprod = 0;
                        for ($i = 1; $i <= $numreg; $i++) { ?>
                        <div class="item-galeria">                            
                            <a href="<?php echo url(); ?>/lookbook/<?php echo $productos[$numprod]->idlook; ?>/<?php echo Str::slug($productos[$numprod]->idlookbook) ?>/<?php echo Str::slug($productos[$numprod]->nombrelook); ?>">
                                 <img src="<?php echo url(); ?>/images/lookbook/portada/<?php echo Str::slug($productos[$numprod]->nombreimagen); ?>.jpg" alt="<?php echo $productos[$numprod]->nombrelook; ?>" class="img-responsive">
                             </a>                            
                             <div class="compartir-galeria">
                                 <img src="images/sarah/compartelo.png" alt="">
                                 <div class="compartir-galeria-redes">
                                     <ul>
                                         <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo url(); ?>/lookbook/<?php echo $productos[$numprod]->idlook; ?>/<?php echo Str::slug($productos[$numprod]->idlookbook) ?>/<?php echo Str::slug($productos[$numprod]->nombrelook); ?>" target="_blank"><i class="icon-facebook"></i></a></li>
                                         <li><a href="https://twitter.com/home?status=<?php echo urlencode($productos[$numprod]->twitterText); ?>" target="_blank"><i class="icon-twitter"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                        </div>
                        <?php 
                            $numprod++;
                        } ?>
                    </div>        
                </div>
            </div>
        </div>
    </div>             
</div>    
<div id="lookbooks" >
<?php 
    $numitemsxPatron=14;
    $numpatron=intval($numreg/14)+1;

    //6

    //echo("numpatron:" . $numpatron);
    //var_dump($productos);
    //echo($productos[0]->nombrelook);
    function contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria){
        $prod='<img src="'. url() .'/images/lookbook/portada/' . $imagen .'.jpg" class="img-responsive" alt="'. $nombrelook .'" />
                                <div class="detalle-item">
                                    <a href="'. url() . '/lookbook/'. $idlook .'/' . Str::slug($categoria) . '/' . Str::slug($productos[$numprod]->nombrelook) . '">
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

    for ($i = 1; $i <= $numreg; $i++) {

?>

    <div class="row row-eq-height">

                        
                        <div class="item col-sm-3">
                            
                            <div class="content-item">
                                <?php 
                                $imagen= $productos[$numprod]->nombreimagen;
                                $nombrelook=$productos[$numprod]->nombrelook;
                                //$categoria=$productos[($i-1)*$numitemsxPatron+$numprod]->nombre;
                                $categoria=$productos[$numprod]->idlookbook;
                                $idlook=$productos[$numprod]->idlook;
                                $imagenmarca=$productos[$numprod]->imagenmarca;
                                $textoTwitter=urlencode($productos[$numprod]->twitterText);
                                //echo(contentItem($imagen,$nombrelook,$idlook,$imagenmarca,$textoTwitter,$categoria));  ?>
                            </div>
                            
                        </div>                                   
    </div>
</div>


<?php
 
    }
?>

@stop