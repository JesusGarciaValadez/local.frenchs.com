<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index ( Recipes $recipesSet )
   	{
      $recipes    = $recipesSet->where( 'active', true )->orderBy( 'created_at', 'desc' )->get()->random( 3 );

      return view( 'home', [ 'recipes' => $recipes ] );
   	}
}
