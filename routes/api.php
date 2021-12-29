<?php
use Inculcate\Routing\Route;

/**
* Here you define the route of your application ..
* 
*
*
*/

Route::group(['prefix'=>'api'],function(){

	Route::get('/getService',[App\Http\Controllers\HomeController::class,'getService']);

});