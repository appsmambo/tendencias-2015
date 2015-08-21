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
                            <a href="{{url()}}"><img src="{{url()}}/images/logo.png" alt="" class="img-responsive"></a>
                        </div>
                        <div class="logo">
                            <a href="{{url()}}"><img src="{{url()}}/images/ripley-header.jpg" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                    
                    <div class="panel-galeria clearfix" id="galeria">
                        <?php 
                            $numprod = 0;
                        for ($i = 1; $i <= $numreg; $i++) { ?>
                        <div class="item-galeria">                            
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
        $prod='<img src="'. url() .'/img/lookbook/portada/' . Str::slug($imagen) .'.jpg" class="img-responsive" alt="'. $nombrelook .'" />
                                <div class="caption">
                                     
                                </div>
                                
                                    <a href="'. url() . '/lookbook/'. $idlook .'/' . Str::slug($categoria) . '/' . Str::slug($nombrelook) . '">
                                        
                                        <div class="boton-item-galeria">
                                            <div class="content-b-look"><img src="' . url() . '/img/lookbook/marcas/' . $imagenmarca .'" class="img-responsive"/></div>
                                        </div>
                                    </a>
                                
                                <div class="compartir-galeria">
                                    <img src="'.  url() .'/images/sarah/compartelo.png"  alt="compartir" class="compartir-lookbook" />
                                    <div class="compartir-galeria-redes">
                                         <ul>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u='. url()  .'/lookbook/'. $idlook .'/'. Str::slug($categoria) . '/' . Str::slug($nombrelook) . '" target="_blank"><img src="'. url() .'/img/facebook.png"  alt="facebook" /></a></li>
                                            <li><a href="https://twitter.com/home?status='. $textoTwitter .'" target="_blank"><img src="'. url() .'/img/twitter.png"  alt="twitter" /></a></li>
                                        </ul>
                                    </div>
                                </div>';
        return $prod;
    }

    ?>

@stop