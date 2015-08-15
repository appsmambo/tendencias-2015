@extends('layouts.desktop')
@section('content')
<a href="{{url()}}/sjp" title="Sarah Jessica Parker">
	<img src="{{url()}}/img/home/1.jpg" class="img-responsive center-block" alt="Sarah Jessica Parker" />
</a>
<a href="{{url()}}/marcas" title="Marcas">
	<img src="{{url()}}/img/home/2.jpg" class="img-responsive center-block" alt="Marcas" />
</a>
<a href="{{url()}}/lookbook" title="Lookbook">
	<img src="{{url()}}/img/home/3.jpg" class="img-responsive center-block" alt="Lookbook" />
</a>
<a href="{{url()}}/accesorios" title="Accesorios">
	<img src="{{url()}}/img/home/4.jpg" class="img-responsive center-block" alt="Accesorios" />
</a>
@stop