@extends('layouts.desktop')
@section('content')
<div id="marcas">
	<img src="{{url()}}/img/marcas/elige-tu-marca.jpg" width="1788" height="930" class="img-responsive center-block" alt="Elige tu Marca" />
	<img src="{{url()}}/img/marcas/1.jpg" width="1788" height="1434" usemap="#Map" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map" id="Map">
		<area shape="rect" coords="3,3,1084,1431" href="{{url()}}/marcas/marquis" />
		<area shape="rect" coords="1088,4,1785,425" href="{{url()}}/marcas/navigata" />
		<area shape="rect" coords="1089,428,1784,1431" href="{{url()}}/marcas/index" />
	</map>
	<img src="{{url()}}/img/marcas/2.jpg" width="1788" height="1285" usemap="#Map2" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map2" id="Map2">
		<area shape="rect" coords="3,4,893,1282" href="{{url()}}/marcas/barbados" />
		<area shape="rect" coords="897,5,1784,1281" href="{{url()}}/marcas/tatienne" />
	</map>
	<img src="{{url()}}/img/marcas/3.jpg" width="1788" height="1157" usemap="#Map3" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map3" id="Map3">
		<area shape="rect" coords="3,4,745,1154" href="{{url()}}/marcas/cacharel" />
		<area shape="rect" coords="746,5,1785,1154" href="{{url()}}/marcas/pepejeans" />
	</map>
	<img src="{{url()}}/img/marcas/4.jpg" width="1788" height="1235" usemap="#Map4"  class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map4" id="Map4">
		<area shape="rect" coords="3,2,857,719" href="{{url()}}/marcas/river-island" />
		<area shape="rect" coords="2,721,857,1235" href="{{url()}}/marcas/espirit" />
		<area shape="rect" coords="859,-1,1785,1231" href="{{url()}}/marcas/veromoda" />
	</map>
	<img src="{{url()}}/img/marcas/5.jpg" width="1788" height="1386" usemap="#Map5" class="maped img-responsive" alt="Elige tu Marca" />
	<map name="Map5" id="Map5">
		<area shape="rect" coords="4,3,1046,1383" href="{{url()}}/marcas/tennis" />
		<area shape="rect" coords="1048,4,1785,689" href="{{url()}}/marcas/guess" />
		<area shape="rect" coords="1048,692,1785,1382" href="{{url()}}/marcas/only" />
	</map>
</div>
@stop

@section('metas')
<title>Ripley, tendencias 2015</title>
<meta name="description" content="Ripley, tendencias 2015" />

<!-- Google -->
<meta itemprop="name" content="Ripley, tendencias 2015">
<meta itemprop="description" content="Ripley, tendencias 2015">
<meta itemprop="image" content="{{url()}}/ripley-tendencias-2015.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="Ripley, tendencias 2015" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{url()}}" />
<meta property="og:image" content="{{url()}}/ripley-tendencias-2015.jpg" />
<meta property="og:description" content="Ripley, tendencias 2015" />
<meta property="og:site_name" content="Ripley, tendencias 2015" />
<meta property="fb:admins" content="100008010128050" />
@stop