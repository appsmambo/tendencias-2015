<style type="text/css">
	html{
		height: 716px;
	}
	@media (max-width: 1400px) {
		html{
			height: 623px;
		}
	}
</style>
<script>
	function getWindowWidth() {
		return $(window).width();
	}
</script>
<script language="javascript">
	var parentDocWidth = parent.getWindowWidth();

	if (parentDocWidth <= 1400) {
		$(".accesorios-detalle-lightbox").addClass("windowResize");
	}

</script>
<?php
switch ($id) {
	case 1:
		$marca = 'barbados.png';
		$nombre = "Vestido a rayas<br/> frunce";
		$sku = "cod.93728639";
		$precio = '<span>PRECIO NORMAL </span><span class="red">$ 79.9</span>';
		$imagen = 'Sandalia-Tabihebi-marquis.jpg';
		break;
	case 2:
		$marca = 'barbados.png';
		$nombre = "Zapato Iris";
		$sku = "cod.16909255";
		$precio = '<span>PRECIO NORMAL </span><span class="red">$99.9</span>';
		$imagen = 'Zapato-Iris-marquis.jpg';
		break;
	case 3:
		$marca = 'marquis.png';
		$nombre = "Sandalia Tabihebi";
		$sku = "cod.16872543";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 189</span>';
		$imagen = 'Sandalia-Tabihebi-marquis.jpg';
		break;
	case 4:
		$marca = 'barbados.png';
		$nombre = "Sandalia Rafaella";
		$sku = "cod.16829389";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 99,9</span>';
		$imagen = 'Sandalia-Rafaella-barbados.jpg';
		break;
	case 5:
		$marca = 'barbados.png';
		$nombre = "Sandalia Rafaella";
		$sku = "cod.16829389";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 99,9</span>';
		$imagen = 'Sandalia-Rafaella-barbados.jpg';
		break;
	case 7:
		$marca = 'marquis.png';
		$nombre = "Sandalia Dalia";
		$sku = "cod.16997246";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 139</span>';
		$imagen = 'Sandalia-Dalia-marquis.jpg';
		break;

	case 8:
		$marca = 'marquis.png';
		$nombre = "Sandalia Apli";
		$sku = "cod.16872517";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 259</span>';
		$imagen = 'Sandalia-Apli-marquis.jpg';
		break;

	case 9:
		$marca = 'marquis.png';
		$nombre = "Alpargata Sonia";
		$sku = "cod.16912774";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 89,9</span>';
		$imagen = 'Alpargata-Sonia-marquis.jpg';
		break;

	case 10:
		$marca = 'marquis.png';
		$nombre = "Sandalia alberca";
		$sku = "cod.17020357";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 149</span>';
		$imagen = 'Sandalia-alberca-marquis.jpg';
		break;

	case 11:
		$marca = 'marquis.png';
		$nombre = "Alpargata Sonia";
		$sku = "cod.16912774";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 89,9</span>';
		$imagen = 'Alpargata-Sonia-marquis.jpg';
		break;

	case 12:
		$marca = 'marquis.png';
		$nombre = "Sandalia Franca";
		$sku = "cod.17017645";
		$precio = '<span>PRECIO NORMAL </span><span class="red">S/. 139</span>';
		$imagen = 'Sandalia-franca-marquis.jpg';
		break;
}
?>


<section id="accesorios-1">
	<div class="accesorios-detalle-lightbox">
		<img src="{{url()}}/img/accesorios/<?php echo($imagen); ?>" class="img-responsive" alt="Accesorios" />
		<div class="precio-accesorios clearfix">
			<div class="columna-precio">
				<p>
					<img src="{{url()}}/img/accesorios/<?php echo($marca); ?>" class="img-responsive" width="88%" alt="Accesorios" />
				</p>
			</div>
			<div class="columna-precio accesorios-centro">
				<p>
					<span>{{$nombre}}</span>
					<br>
					{{$sku}}
				</p>
			</div>
			<div class="columna-precio">
				<p>
					{{$precio}}
				</p>
			</div>
		</div>
	</div>
</section>
<div style="display:none;">
	<img src="{{url()}}/img/accesorios/Alpargata-Sonia-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-alberca-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-Apli-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-Dalia-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-franca-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-Rafaella-barbados.jpg" />
	<img src="{{url()}}/img/accesorios/Sandalia-Tabihebi-marquis.jpg" />
	<img src="{{url()}}/img/accesorios/Zapato-Iris-marquis.jpg" />
	
</div>
