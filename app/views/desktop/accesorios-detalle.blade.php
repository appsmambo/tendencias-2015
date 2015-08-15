<?php

if($id==1){
    $nombre="<p>Vestido a rayas<br/> frunce</p>";
    $sku="cod.93728639";
    $precio='<span>PRECIO NORMAL </span><span class="red">$ 79.90</span>';
}

if($id==2){
    $nombre="<p>Vestido a rayitas<br/> frunce</p>";
    $sku="cod.9372832222";
    $precio='<span>PRECIO NORMAL </span><span class="red">$ 579.90</span>';
}


?>


<section id="accesorios-1">
                <div class="accesorios-detalle-lightbox">
                    <img src="{{url()}}/img/accesorios/1-detalle.jpg" class="img-responsive" alt="Accesorios" />
                    <div class="precio-accesorios clearfix">
                            <div class="columna-precio">
                                <?php echo($nombre);?>
                            </div>
                            <div class="columna-precio accesorios-centro">
                                <p><?php echo($sku);?></p>
                            </div>
                            <div class="columna-precio">
                                <p>
                                    <?php echo($precio);?>
                                </p>
                            </div>
                    </div>
                </div>
</section>

