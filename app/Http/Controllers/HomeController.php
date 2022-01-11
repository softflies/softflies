<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inculcate\Routing\Request;

class HomeController extends Controller
{
    public function index() {
        
        
      // $request = new Request();

     // $request= $countTickets = new \stdClass;
      // $countTickets->love = "love";

   /echo "<pre>"; print_r( $request); die(); 

    	return view("welcome");
    	
    }
}
