<style type="text/css">
	html{
		height: 715px;
	}
	@media (max-width: 1400px) {
		html{
			height: 529px;
		}
	}
</style>
<script>
  function getWindowWidth(){
      return $( window ).width();
  }
  </script>
<script language="javascript">
var parentDocWidth = parent.getWindowWidth();

if(parentDocWidth<=1400){
    $(".accesorios-detalle-lightbox").addClass("windowResize");
}

</script>
<?php

switch ($id) {
    case 1:
        $nombre="<p>Vestido a rayas<br/> frunce</p>";
         $sku="cod.93728639";
    	$precio='<span>PRECIO NORMAL </span><span class="red">$ 79.90</span>';
    	$imagen='Sandalia-Tabihebi-marquis.jpg';
        break;
    case 2:
        $nombre="<p>Vestido a rayitas<br/> frunce</p>";
    	$sku="cod.9372832222";
    	$precio='<span>PRECIO NORMAL </span><span class="red">$ 579.90</span>';
    	$imagen='Zapato-Iris-marquis.jpg';
        break;
    case 3:
        $nombre="<p>Sandalia Tabihebi</p>";
    	$sku="cod.16872543";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 189</span>';
    	$imagen='Sandalia-Tabihebi-marquis.jpg';
        break;
    case 4:
        $nombre="<p>Sandalia Franca</p>";
    	$sku="cod.17017645";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 149</span>';
    	$imagen='Sandalia-Rafaella-barbados.jpg';
        break;

    case 7:
        $nombre="<p>Sandalia Dalia</p>";
    	$sku="cod.16997246";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 139</span>';
    	$imagen='Sandalia-Dalia-marquis.jpg';
        break;    

    case 8:
        $nombre="<p>Sandalia alberca</p>";
    	$sku="cod.17020357";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 149</span>';
    	$imagen='Sandalia-Apli-marquis.jpg';
        break;

     case 9:
        $nombre="<p>Zapato Iris</p>";
    	$sku="cod.16909255";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 99,9</span>';
    	$imagen='Alpargata-Sonia-marquis.jpg';
        break;
        
     case 10:
        $nombre="<p>Sandalia Apli</p>";
    	$sku="cod.16872517";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 259</span>';
    	$imagen='Sandalia-alberca-marquis.jpg';
        break; 
        
    case 11:
        $nombre="<p>Alpargata Sonia</p>";
    	$sku="cod.16912774";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 89,9</span>';
    	$imagen='Alpargata-Sonia-marquis.jpg';
        break;

    case 12:
        $nombre="<p>Sandalia Rafaella</p>";
    	$sku="cod.16829389";
    	$precio='<span>PRECIO NORMAL </span><span class="red">S/. 99,9</span>';
    	$imagen='Sandalia-franca-marquis.jpg';
        break;                    
} 


?>


<section id="accesorios-1">
                <div class="accesorios-detalle-lightbox">
                    <img src="{{url()}}/img/accesorios/<?php echo($imagen); ?>" class="img-responsive" alt="Accesorios" />
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

