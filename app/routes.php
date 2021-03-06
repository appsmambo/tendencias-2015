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

Route::get('/revista',array('as' => 'revista', function () {
	return  View::make(defineFolder() . 'revista');
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

Route::get('/marcas/river-island',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-river-island')->with('itemactive',8);
}));

Route::get('/marcas/esprit',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-espirit')->with('itemactive',9);
}));

Route::get('/marcas/veromoda',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-veromoda')->with('itemactive',10);
}));
Route::get('/marcas/tennis',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-tennis')->with('itemactive',11);
}));
Route::get('/marcas/guess',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-guess')->with('itemactive',12);
}));
Route::get('/marcas/only',array('as' => 'marcas', function () {
	return  View::make(defineFolder() . 'marcas-only')->with('itemactive',13);
}));

Route::get('/accesorios',array('as' => 'accesorios', function () {
	return  View::make(defineFolder() . 'accesorios');
}));

Route::get('/accesorios/{id?}',array('as' => 'accesoriosdetalle',function($id = null)
{
    return  View::make(defineFolder() . 'accesorios-detalle')->with('id',$id);
}));

Route::get('/lookbook', array('as' => 'lookbook', 'uses' => 'LookbookController@index'));
Route::get('/lookbook/{id}/{name}', array('as' => 'lookbook', 'uses' => 'LookbookController@looks'));
Route::get('/lookbook/{id}/{categoria}/{name}', array('as' => 'detallelook', 'uses' => 'LookbookController@detail'));


Route::get('/lookbook2',array('as' => 'lookbook2', function () {
	return  View::make(defineFolder() . 'lookbook2');
}));

function getIP(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

function defineFolder(){
	$isMobile=Agent::isMobile();
	$ips = array('190.234.106.195', '179.7.84.155');
    $ip = getIP();
	
    $folder='desktop/';	
	if ($isMobile)
	   $folder='mobile/';
	
	// Hack
	if (in_array($ip, $ips)) 
	    $folder='mobile/';

	return $folder;
}