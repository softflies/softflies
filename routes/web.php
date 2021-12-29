<?php
use Inculcate\Routing\Route;

/**
* Here you define the route of your application ..
* Web routes have to be written here.
*
*/

Route::get('/home',[App\Http\Controllers\HomeController::class,'index']);
Route::get("/",function(){
	
	  return view("welcome");

});