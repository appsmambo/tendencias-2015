@extends('layouts.desktop')
@section('content')
<div class="row">
                        <div class="col-sm-10 col-sm-offset-1 detalle-lookbook">
                            <a href="#" class="prev"><img src="{{url()}}/img/lookbook/prev.png" class="img-responsive" alt="prev" /></a>
                            <a href="#" class="next"><img src="{{url()}}/img/lookbook/next.png" class="img-responsive" alt="next" /></a>
                            <div class="row ">
                                <div class="col-sm-9 slider-prenda">
                                    <div class="clearfix">
                                        <a href="lookbook.php" class="pull-left"><img src="{{url()}}/img/lookbook/volver.png"  alt="volver" /></a>
                                        <img src="{{url()}}/img/lookbook/marquis.png" class="pull-right" alt="Marquis" />
                                    </div>
                                    <div class="galeria-slider clearfix">
                                        <ul class="bxslider">
                                          <li><img src="{{url()}}/img/lookbook/detalle-1.jpg" /></li>
                                          <li><img src="{{url()}}/img/lookbook/detalle-2.jpg" /></li>
                                          <li><img src="{{url()}}/img/lookbook/detalle-1.jpg" /></li>
                                          <li><img src="{{url()}}/img/lookbook/detalle-2.jpg" /></li>
                                        </ul>
                                        <div id="bx-pager">
                                          <a data-slide-index="0" href=""><img src="{{url()}}/img/lookbook/marquis-2.jpg" class="img-responsive" /></a>
                                          <a data-slide-index="1" href=""><img src="{{url()}}/img/lookbook/marquis-1.jpg" class="img-responsive" /></a>
                                          <a data-slide-index="2" href=""><img src="{{url()}}/img/lookbook/marquis-3.jpg" class="img-responsive" /></a>
                                          <a data-slide-index="3" href=""><img src="{{url()}}/img/lookbook/marquis-4.jpg" class="img-responsive" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 prenda-precio pull-right">
                                    <h3 class="titulo">Vestido a rayas a founce</h3>
                                    <span class="sku">cod.93728639</span>
                                    <p class="precio">
                                        PRECIO NORMAL 
                                        <span>$ 79.90</span>
                                    </p>
                                    <div class="descripcion ">
                                        <span>DESCRIPCIÓN</span>
                                        <ul>
                                            <li>Denim no elástico</li>
                                            <li>En un acabado con estampado metalizado</li>
                                            <li>Diseño sin cuello</li>
                                        </ul>
                                    </div>
                                    <p class="combinalo">
                                        <a href="#combinalo" class="combinando">combinalo con <img src="{{url()}}/img/lookbook/combinalo.jpg"  /></a>
                                    </p>
                                </div>
                                <div clas="clearfix"></div>
                                <div class="col-sm-11 lista-similares">
                                    productos similares
                                    
                                        <ul class="row  clearfix">
                                            <li class="col-sm-3"><a href="#"><img src="{{url()}}/img/lookbook/similares-1.jpg" class="img-responsive" alt="similares" /></a></li>
                                            <li class="col-sm-3"><a href="#"><img src="{{url()}}/img/lookbook/similares-2.jpg" class="img-responsive" alt="similares" /></a></li>
                                            <li class="col-sm-3"><a href="#"><img src="{{url()}}/img/lookbook/similares-3.jpg" class="img-responsive" alt="similares" /></a></li>
                                            <li class="col-sm-3"><a href="#"><img src="{{url()}}/img/lookbook/similares-4.jpg" class="img-responsive" alt="similares" /></a></li>
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