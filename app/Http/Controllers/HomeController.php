<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inculcate\Routing\Request;

class HomeController extends Controller
{
    public function index() {

    	return view("welcome");
    	
    }
}
