<?php

namespace frenchs\Http\Controllers;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index ()
   	{
   		return view( 'home' );
   	}

}
