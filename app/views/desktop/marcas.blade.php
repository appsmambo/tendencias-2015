@extends('layouts.desktop')
@section('content')
<div id="marcas">
	<img src="{{url()}}/img/marcas/elige-tu-marca.jpg" width="1788" height="930" class="img-responsive center-block" alt="Elige tu Marca" />
	<img src="{{url()}}/img/marcas/1.jpg" width="1788" height="1434" usemap="#Map" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map" id="Map">
		<area shape="rect" coords="3,3,1084,1431" href="{{url()}}/marcas/marquis" />
		<area shape="rect" coords="1088,4,1785,425" href="{{url()}}/marcas/barbados" />
		<area shape="rect" coords="1089,428,1784,1431" href="{{url()}}/marcas/index" />
	</map>
	<img src="{{url()}}/img/marcas/2.jpg" width="1788" height="1285" usemap="#Map2" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map2" id="Map2">
		<area shape="rect" coords="3,4,893,1282" href="{{url()}}/marcas/navigata" />
		<area shape="rect" coords="897,5,1784,1281" href="{{url()}}/marcas/tatienne" />
	</map>
	<img src="{{url()}}/img/marcas/3.jpg" width="1788" height="1157" usemap="#Map3" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map3" id="Map3">
		<area shape="rect" coords="3,4,745,1154" href="{{url()}}/marcas/cacharel" />
		<area shape="rect" coords="746,5,1785,1154" href="{{url()}}/marcas/pepejeans" />
	</map>
</div>
@stop