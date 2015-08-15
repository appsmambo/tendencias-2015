@extends('layouts.desktop')
@section('content')
<div id="marcas" >
    <img src="{{url()}}/img/marcas/elige.jpg" class="img-responsive" alt="Elige tu Marca" />
    <div class="row no-gutter">
        <div class="col-sm-12">
            <img src="{{url()}}/img/marcas/1.jpg" alt="facebook" usemap="#Map" class="img-responsive" />
            <map name="Map" id="Map">
              <area shape="rect" coords="1,0,1085,1432" href="marcas-marquis" />
              <area shape="rect" coords="1087,429,1784,1431" href="marcas-tatienne" />
              <area shape="rect" coords="1087,5,1784,427" href="marcas-navigata" />
            </map>
        </div>
        <div class="col-sm-6">
            <a href="marcas-barbados"><img src="{{url()}}/img/marcas/barbados.jpg" class="img-responsive" alt="facebook" /></a>
        </div>
        <div class="col-sm-6">
            <a href="marcas-index"><img src="{{url()}}/img/marcas/index.jpg" class="img-responsive" alt="facebook" /></a>
        </div>
        <div class="col-sm-12">
            <img src="{{url()}}/img/marcas/2.jpg" alt="facebook" usemap="#Map2" class="img-responsive" />
            <map name="Map2" id="Map2">
                <area shape="rect" coords="5,6,744,1153" href="marcas-cacharel" />
                <area shape="rect" coords="750,5,1783,1152" href="marcas-pepe-jeans" />
            </map>                   
        </div>
    </div>
</div>
@stop