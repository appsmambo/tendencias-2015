@extends('layouts.desktop')
@section('content')
<div class="row">
                        <div class="col-sm-10 col-sm-offset-1 detalle-lookbook">
                            <a href="#" class="prev"><img src="{{url()}}/img/lookbook/prev.png" class="img-responsive" alt="prev" /></a>
                            <a href="#" class="next"><img src="{{url()}}/img/lookbook/next.png" class="img-responsive" alt="next" /></a>
                            <div class="row ">
                                <div class="col-sm-9 slider-prenda">
                                    <div class="clearfix">
                                        <a href="{{url()}}/lookbook" class="pull-left"><img src="{{url()}}/img/lookbook/volver.png"  alt="volver" /></a>
                                        <img src="{{url()}}/img/lookbook/{{$producto[0]->imagenmarca}}" class="pull-right" alt="" />
                                    </div>
                                    <div class="galeria-slider clearfix">
                                        <ul class="bxslider">
                                        @for($i = 1; $i <= $producto[0]->numeroimagenes; $i++)
                                          <li><img src="{{url()}}/img/lookbook/detalle/max/{{Str::slug($producto[0]->nombrelook)}}-{{$i}}.jpg" /></li>
                                        @endfor  
                                        </ul>
                                        <div id="bx-pager">
                                        @for($i = 0; $i < $producto[0]->numeroimagenes; $i++)
                                          <a data-slide-index="{{$i}}" href=""><img src="{{url()}}/img/lookbook/detalle/min/{{Str::slug($producto[0]->nombrelook)}}-{{$i+1}}.jpg" class="img-responsive" /></a>
                                        @endfor
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 prenda-precio pull-right">
                                    <h3 class="titulo">{{$producto[0]->nombrelook}}</h3>
                                    <span class="sku">cod.{{$producto[0]->sku}}</span>
                                    <p class="precio">
                                        PRECIO NORMAL 
                                        <span>S/. {{$producto[0]->precio}}</span>
                                    </p>
                                    <div class="descripcion ">
                                        <span>DESCRIPCIÓN</span>
                                        <ul style="display:none;">
                                            {{$producto[0]->descripcion}}
                                        </ul>
                                    </div>
                                    <p class="combinalo">
                                        <a href="#combinalo" class="combinando">combinalo con <img src="{{url()}}/img/lookbook/combinalo.jpg"  /></a>
                                    </p>
									<div class="botones-paginado">
										<a href="{{url()}}/lookbook/{{$ant[0]->idlook}}/{{$ant[0]->idlookbook}}/{{Str::slug($ant[0]->nombrelook)}}"><img src="{{url()}}/img/lookbook/prev.png"  alt="prev" /></a>
										<img src="{{url()}}/img/lookbook/border.jpg"  />
										<a href="{{url()}}/lookbook/{{$sig[0]->idlook}}/{{$sig[0]->idlookbook}}/{{Str::slug($sig[0]->nombrelook)}}"><img src="{{url()}}/img/lookbook/next.png"  alt="next" /> siguiente prenda</a>
									
									</div>
                                </div>
                                <div clas="clearfix"></div>
                                <div class="col-sm-11 lista-similares">
                                    productos similares
                                    
                                        <ul class="row  clearfix">
                                             @foreach($similares as $index =>$similar)
                                            <li class="col-sm-3"><a href="{{url()}}/lookbook/{{ $similar->idlook }}/{{ $similar->idlookbook }}/{{ Str::slug($similar->nombrelook) }}"><img src="{{url()}}/img/lookbook/similares/{{Str::slug($similar->nombrelook)}}.jpg" class="img-responsive" alt="{{$similar->nombrelook}}" /></a></li>
                                            @endforeach
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="combinalo-detalle" id="combinalo">
                        <div class="detalle-combinalo first">
                            <div class="imagen-detalle-combinalo">
                                <img src="{{url()}}/img/lookbook/combinalo-1.jpg"  />
                            </div>
                            <a href="#"><img src="{{url()}}/img/lookbook/ver-detalle.jpg"  /></a>
                        </div>
                        <div class="detalle-combinalo second">
                            <div class="imagen-detalle-combinalo">
                                <img src="{{url()}}/img/lookbook/combinalo-2.jpg"  />
                            </div>
                            <a href="#"><img src="{{url()}}/img/lookbook/ver-detalle.jpg"  /></a>
                        </div>
                        <div class="detalle-combinalo third">
                            <div class="imagen-detalle-combinalo">
                                <img src="{{url()}}/img/lookbook/combinalo-3.jpg"  />
                            </div>
                            <a href="#"><img src="{{url()}}/img/lookbook/ver-detalle.jpg"  /></a>
                        </div>
                        <div class="detalle-combinalo">
                            
                        </div>
                        <div class="clearfix"></div>
                    </div>
@stop