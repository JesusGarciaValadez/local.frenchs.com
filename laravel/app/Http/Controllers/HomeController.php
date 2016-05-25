<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipe;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * Return the home view with a bunch of recipes from the database
   * @param  Recipes $recipesSet Set of recipes from the database
   * @return View                View 'home' with a bunch of recipes as parameters
   */
  public function index ( Recipe $recipesSet )
  {
    $recipes    = $recipesSet->where( 'active', true )
                             ->orderBy( 'created_at', 'desc' )
                             ->get()
                             ->random( 3 );

    return view( 'home', [ 'recipes' => $recipes ] );
  }
}
