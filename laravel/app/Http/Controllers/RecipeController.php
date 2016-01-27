<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class RecipeController extends Controller
{
  protected $_categories = [];

  public function index ( Request $request, Recipes $recipesSet, RecipesCategories $recipesCategories )
  {
    $recipe     = $recipesSet->findOrFail( $request->id );
    $recipes    = $recipesSet->orderBy( 'created_at' )->take( 4 )->get();
    $categories = $recipesCategories->all();

    return view( 'detalle-receta', [ 'recipe' => $recipe, 'recipes' => $recipes, 'categories' => $categories ] );
  }

  public function update ( Request $request, Recipes $recipes, RecipesCategories $recipesCategories )
  {
    // Obtain the recipe information
    $recipe         = $recipes->findOrFail( $request->id );

    // Obtaining categories information
    $categoriesSet  = $recipesCategories->all();

    foreach ( $categoriesSet as $categorie )
    {
      $this->_categories[ $categorie[ 'id' ] ] = $categorie[ 'categorie_name' ];
    }

    // Obtain domain URL
    $domain         = $request->root();

    // Passing the recipe information, categories and domain url to the view
    return view( 'recipes.edit', [ 'recipe' => $recipe, 'categories' => $this->_categories, 'domain' => $domain ] );
  }

  public function updated ( Request $request, Recipes $recipes )
  {
    // Obtain the recipe information
    $recipe   = $request->all();

    if ( !isset( $request[ 'photo' ] ) || empty( 'photo' ) )
    {
      $recipe[ 'photo' ] = $request[ 'old_photo' ];
      unset( $recipe[ 'old_photo' ] );
    }

    $recipe[ 'categorie' ] = intval( $request[ 'categorie' ] );
    unset( $recipe[ '_method' ] );
    unset( $recipe[ '_token' ] );

    $response = \frenchs\Recipes::where( 'id', $recipe[ 'id' ] )
                                ->update( $recipe );

    // Passing the recipe information, categories and domain url to the view
    return view( 'recipes.edited', [ 'response' => $response ] );
  }
}
