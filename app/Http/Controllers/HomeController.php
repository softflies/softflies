<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * @method @__construct
     * @param null
     * @return HomeController\__construct
     */
    public function __construct(){

    }
    /**
     * @method @index
     * @param null
     * @return HomeController\index
     */
    public function index(){ 
    
       $name="OutGood";
       return view("welcome",compact('name'));

    }
}
