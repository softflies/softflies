<?php
/**
 * @author      Amit Roy <amit@softflies.com>
 * @copyright   Copyright (c), 2021 Amit Roy
 * @license     MIT public license
 */
namespace App\Providers;

use Inculcate\Foundation\Providers;
use Inculcate\Routing\Route;
/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends Providers
{	
	/**
	* To get to register the routes files
	* @param null
	* @method in
	* @return App\Providers\RouteServiceProvider\in
	*/
	public function in(){
       
     $this->routes(function(){
      	  Route::register(base_path("routes/web.php"));
      	  Route::register(base_path("routes/api.php"));
     });

	}
}