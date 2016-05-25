<?php

namespace frenchs\Http\Controllers;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class AboutController extends Controller
{
  /**
   * Show 'acerca' view
   * @return View Return the 'acerca' view
   */
  public function index ()
  {
    return view( 'acerca' );
  }
}
