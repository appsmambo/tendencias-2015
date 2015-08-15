<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
	
Route::get('/', array('as' => 'home', function () {
	return  View::make(defineFolder() . 'home');
}));

Route::get('/sjp',array('as' => 'sarah', function () {
	return  View::make(defineFolder() . 'sarah');
}));

Route::get('/marcas',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas');
}));

Route::get('/marcas/marquis',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-marquis')->with('itemactive',1);
}));

Route::get('/marcas/navigata',array('as' => 'marcas',function () {
	return  View::make(defineFolder() . 'marcas-navigata')->with('itemactive',2);
}));

Route::get('/marcas/tatienne',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-tatienne')->with('itemactive',3);
}));

Route::get('/marcas/cacharel',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-cacharel')->with('itemactive',4);
}));

Route::get('/marcas/index', array('as' => 'marcas',function () {
	return  View::make(defineFolder() . 'marcas-index')->with('itemactive',5);
}));

Route::get('/marcas/barbados',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-barbados')->with('itemactive',6);
}));

Route::get('/marcas/pepejeans',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-pepe-jeans')->with('itemactive',7);
}));

Route::get('/accesorios',array('as' => 'accesorios', function () {
	return  View::make(defineFolder() . 'accesorios');
}));

Route::get('/accesorios/{id?}',array('as' => 'accesoriosdetalle',function($id = null)
{
    return  View::make(defineFolder() . 'accesorios-detalle')->with('id',$id);
}));

Route::get('/lookbook', array('as' => 'lookbook', 'uses' => 'LookbookController@index'));
Route::get('/lookbook/{name}', array('as' => 'detallelook', 'uses' => 'LookbookController@detail'));

function defineFolder(){
	$isMobile=Agent::isMobile();
	$folder='desktop/';
	if ($isMobile)
		$folder='mobile/';

	return $folder;
}