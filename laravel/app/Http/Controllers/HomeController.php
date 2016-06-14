<?php

namespace Frenchs\Http\Controllers;

use Frenchs\Recipe;

use Illuminate\Http\Request;

use Frenchs\Http\Requests;
use Frenchs\Http\Controllers\Controller;

class HomeController extends Controller
{
  /**
   * Return the home view with a bunch of recipes from the database
   * @param  Recipes $recipesSet Set of recipes from the database
   * @return View                View 'home' with a bunch of recipes as parameters
   */
  public function index ( )
  {
    $recipes    = Recipe::where( 'active', true )
                        ->inRandomOrder()
                        ->take( 3 )
                        ->get();

    return view( 'home', [ 'recipes' => $recipes ] );
  }
}
