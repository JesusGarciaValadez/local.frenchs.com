<?php

namespace frenchs\Http\Controllers;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index ()
   	{
   		return view( 'acerca' );
   	}
}
