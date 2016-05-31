<?php

namespace Frenchs\Http\Controllers;

use Illuminate\Http\Request;

use Frenchs\Http\Requests;
use Frenchs\Http\Controllers\Controller;

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
