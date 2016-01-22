<?php

namespace App\Http\Controllers;

use App\Recipes;
use App\RecipesCategories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipeController extends Controller
{
    public function index ( Request $request, Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipe     = $recipesSet->findOrFail( $request->id );
      $recipes    = $recipesSet->orderBy( 'created_at' )->take( 4 )->get();
      $categories = $recipesCategories->all();

      return view( 'detalle-receta', [ 'recipe' => $recipe, 'recipes' => $recipes, 'categories' => $categories ] );
    }
}
