<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class RecipeController extends Controller
{
  protected $_recipe      = [];
  protected $_categories  = [];
  protected $domain       = "";

  public function index ( Request $request, Recipes $recipesSet, RecipesCategories $recipesCategories )
  {
    $recipe     = $recipesSet->findOrFail( $request->id );
    $recipes    = $recipesSet->orderBy( 'created_at' )->take( 4 )->get();
    $categories = $recipesCategories->all();

    return view( 'detalle-receta', [ 'recipe' => $recipe, 'recipes' => $recipes, 'categories' => $categories ] );
  }

  public function update ( Request $request, Recipes $recipes, RecipesCategories $recipesCategories )
  {
    $this->_getRecipe( $request, $recipes );
    $this->_getCategories( $recipesCategories );
    $this->_getDomain( $request );

    // Passing the recipe information, categories and domain url to the view
    return view( 'recipes.edit', [
                 'recipe'     => $this->_recipe,
                 'categories' => $this->_categories,
                 'domain'     => $this->_domain,
                 'response'   => [ 'message' => '', 'updated' => null ] ] );
  }

  public function updated ( Request $request, Recipes $recipes, RecipesCategories $recipesCategories )
  {
    $this->_getRecipe( $request, $recipes );
    $this->_getCategories( $recipesCategories );
    $this->_getDomain( $request );

    if ( !isset( $request[ 'photo' ] ) || empty( 'photo' ) )
    {
      $this->recipe[ 'photo' ] = $request[ 'old_photo' ];
      unset( $this->_recipe[ 'old_photo' ] );
    }

    $this->_recipe[ 'categorie' ] = intval( $request[ 'categorie' ] );

    $recipe[ 'id' ]                   = $this->_recipe->id;
    $recipe[ 'user_name' ]            = $this->_recipe->user_name;
    $recipe[ 'user_email' ]           = $this->_recipe->user_email;
    $recipe[ 'name' ]                 = $this->_recipe->name;
    $recipe[ 'photo' ]                = $this->_recipe->photo;
    $recipe[ 'categorie' ]            = $this->_recipe->categorie;
    $recipe[ 'portions' ]             = $this->_recipe->portions;
    $recipe[ 'preparation_time' ]     = $this->_recipe->preparation_time;
    $recipe[ 'cooking_time' ]         = $this->_recipe->cooking_time;
    $recipe[ 'ingredients_desktop' ]  = $this->_recipe->ingredients_desktop;
    $recipe[ 'ingredients_mobile' ]   = $this->_recipe->ingredients_mobile;
    $recipe[ 'preparation' ]          = $this->_recipe->preparation;
    $recipe[ 'ranking' ]              = $this->_recipe->ranking;
    $recipe[ 'active' ]               = $this->_recipe->active;

    $update = \frenchs\Recipes::where( 'id', $this->_recipe[ 'id' ] )
                              ->update( $recipe );

    // Create a response for passing it to the view
    $response[ 'message' ] = ( $update ) ? "Receta actualizada" : "Hubo un error al actualizar la receta. :/";
    $response[ 'updated' ] = ( $update ) ? true : false;

    // Passing the recipe information, categories and domain url to the view
    return view( 'recipes.edit', [
                 'recipe'     => $this->_recipe,
                 'categories' => $this->_categories,
                 'domain'     => $this->_domain,
                 'response'   => $response ] );
  }

  protected function _getRecipe ( Request $request, Recipes $recipes )
  {
    // Obtain the recipe information
    $this->_recipe = $recipes->findOrFail( $request->id );
  }

  protected function _getCategories ( RecipesCategories $recipesCategories )
  {
    // Obtaining categories information
    $categoriesSet  = $recipesCategories->all();

    foreach ( $categoriesSet as $categorie )
    {
      $this->_categories[ $categorie[ 'id' ] ] = $categorie[ 'categorie_name' ];
    }
  }

  protected function _getDomain ( Request $request )
  {
    // Obtain domain URL
    $this->_domain         = $request->root();
  }
}
