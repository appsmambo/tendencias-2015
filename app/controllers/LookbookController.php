<?php

class LookbookController extends BaseController {
	/*
	  |--------------------------------------------------------------------------
	  | Default Home Controller
	  |--------------------------------------------------------------------------
	  |
	  | You may wish to use controllers instead of, or in addition to, Closure
	  | based routes. That's great! Here is an example controller method to
	  | get you started. To route to this controller, just add the route:
	  |
	  |	Route::get('/', 'HomeController@showWelcome');
	  |
	 */

	public function index() {

		$productos = DB::table('looks')
			->where('looks.estado', '=', 1)
			->orderBy('looks.orden', 'asc')
			->join('lookbook', 'lookbook.idlookbook', '=', 'looks.idlookbook')
			->select('looks.*', 'lookbook.nombre')
			->get();

		$count = count($productos);

		$isMobile = Agent::isMobile();
		//$isMobile=true;

		if ($isMobile) {
			return View::make('mobile/lookbook')->with('productos', $productos)->with('numreg', $count);
		} else {
			return View::make('desktop/lookbook')->with('productos', $productos)->with('numreg', $count);
		}
	}

	public function looks($id, $categoria) {

		$productos = DB::table('looks')->where('looks.idlookbook', $id)->where('looks.estado', '=', 1)->orderBy('looks.orden2', 'desc')
				->join('lookbook', 'lookbook.idlookbook', '=', 'looks.idlookbook')
				->select('looks.*', 'lookbook.nombre')
				->get();

		$count = count($productos);

		$isMobile = Agent::isMobile();
		//$isMobile=true;

		if ($isMobile) {
			return View::make('mobile/lookbook')->with('productos', $productos)->with('numreg', $count);
		} else {
			return View::make('desktop/lookbook')->with('productos', $productos)->with('numreg', $count);
		}
	}

	public function detail($idLook, $categoria, $name) {

		$producto = DB::table('looks')->where('looks.idlook', $idLook)->where('looks.estado', '>=', 1)
				->join('lookbook', 'lookbook.idlookbook', '=', 'looks.idlookbook')
				->select('looks.*', 'lookbook.nombre')
				->get();

		$subcate = $producto[0]->subcategoria;

		$ordensuperior = $producto[0]->orden2 + 1;
		$ordeninferior = $producto[0]->orden2 - 1;

		$numregistros = DB::table('looks')
		->where('looks.idlookbook', $categoria)
		->count();

		if ($ordensuperior > $numregistros)
			$ordensuperior = 1;
		if ($ordeninferior <= 1)
			$ordeninferior = $numregistros;

		$prodsiguiente = DB::table('looks')->where('looks.orden2', $ordensuperior)
				->where('looks.estado', '>=', 1)
				->where('looks.idlookbook', $categoria)
				->select('looks.idlook','looks.nombrelook','looks.idlookbook')
				->take(1)
				->get();

		$prodanterior = DB::table('looks')->where('looks.orden2', $ordeninferior)
				->where('looks.estado', '>=', 1)
				->where('looks.idlookbook', $categoria)
				->select('looks.idlook','looks.nombrelook','looks.idlookbook')
				->take(1)
				->get();

		/*$similares = DB::table('looks')
				->where('looks.idlookbook', '=', $categoria)
				->where('looks.estado', '=', 1)
				->where('looks.idlook', '!=', $idLook)
				->select('looks.*')
				->orderBy('looks.orden2')
				->take(4)
				->get();*/
				
				$similares = DB::table('looks')
				->where('looks.idlookbook', '=', $categoria)
				->where('looks.estado', '>=', 1)
				->where('looks.idlook', '!=', $idLook)
				->where('looks.subcategoria', $subcate)
				->select('looks.*')
				->orderBy(DB::raw('RAND()'))
				->get();

		$isMobile = Agent::isMobile();

		if ($isMobile) {
			return View::make('mobile/lookbook-detail')->with('producto', $producto)->with('similares', $similares)->with('sig', $prodsiguiente)->with('ant', $prodanterior);
		} else {
			return View::make('desktop/lookbook-detail')->with('producto', $producto)->with('similares', $similares)->with('sig', $prodsiguiente)->with('ant', $prodanterior);
		}
	}

}
