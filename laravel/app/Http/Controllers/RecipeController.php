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
  protected $_domain       = "";

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

    $recipe[ 'id' ]                   = $this->_recipe[ 'id' ];
    $recipe[ 'name' ]                 = $this->_recipe[ 'name' ];
    $recipe[ 'old_photo' ]            = $this->_recipe[ 'photo' ];
    $recipe[ 'photo' ]                = "";
    $recipe[ 'categorie' ]            = $this->_recipe[ 'categorie' ];
    $recipe[ 'portions' ]             = $this->_recipe[ 'portions' ];
    $recipe[ 'preparation_time' ]     = $this->_recipe[ 'preparation_time' ];
    $recipe[ 'cooking_time' ]         = $this->_recipe[ 'cooking_time' ];
    $recipe[ 'ingredients_desktop' ]  = $this->_recipe[ 'ingredients_desktop' ];
    $recipe[ 'ingredients_mobile' ]   = $this->_recipe[ 'ingredients_mobile' ];
    $recipe[ 'preparation' ]          = $this->_recipe[ 'preparation' ];
    $recipe[ 'ranking' ]              = $this->_recipe[ 'ranking' ];
    $recipe[ 'active' ]               = ( $this->_recipe[ 'active' ] ) ? true : false;

    /*
     * Passing the recipe information, categories and domain url to the view
     */
    return view( 'recipes.edit', [
                 'recipe'     => $recipe,
                 'categories' => $this->_categories,
                 'domain'     => $this->_domain ] );
  }

  public function updated ( Request $request, Recipes $recipes, RecipesCategories $recipesCategories )
  {
    $this->_getRecipe( $request, $recipes );
    $this->_getCategories( $recipesCategories );
    $this->_getDomain( $request );

    $recipe         = $this->_setRecipeInfo( $request );
    $recipe[ 'id' ] = $this->_recipe[ 'id' ];

    /*
     * Setting validation rules
     */
    $validator = \Validator::make( $recipe, [
      'name'                => 'required|max:255',
      'photo'               => 'sometimes|required|mimes:png,jpeg',
      'categorie'           => 'required|exists:recipes_categories,id',
      'portions'            => 'required|in:1,2,3,4,5,6',
      'preparation_time'    => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'cooking_time'        => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'ingredients_desktop' => 'required|max:255',
      'ingredients_mobile'  => 'required|max:255',
      'preparation'         => 'required|max:255',
      'ranking'             => 'required|in:1,2,3,4,5',
      'active'              => 'required'
    ], [
      'required'    => "El campo ':attribute' es obligatorio.",
      'alpha'       => "El campo ':attribute' solo debe contener letras.",
      'alpha_dash'  => "El campo ':attribute' solo debe contener letras, numeros y guiones bajos.",
      'alpha_num'   => "El campo ':attribute' solo debe contener letras y numeros.",
      'same'        => 'The :attribute and :other must match.',
      'size'        => 'The :attribute must be exactly :size.',
      'between'     => 'The :attribute must be between :min - :max.',
      'in'          => 'The :attribute must be one of the following types: :values',
    ] );

    if ( $validator->fails() )
    {
      /*
       * If validation fails, send response via JSON with an error code
       */
      return response()->json( [
        'response_message'  => 'Validation fail',
        'response_code'     => '0',
        'errors'            => $validator->errors()->all(),
        'recipe: '          => $recipe ] );
    }
    else
    {
      /*
       * If there's a file, then uploading it.
       */
      $recipe[ 'photo' ] = ( $this->_uploadPhoto( $request ) ) ? $this->_recipe[ 'photo' ] : $request->old_photo;

      /*
       * Persist the new data into the database.
       */
      $update = \frenchs\Recipes::where( 'id', $request[ 'id' ] )
                                ->update( $recipe );

      /*
       * Create a response for passing it into the view.
       */
      $recipe[ 'message' ]    = ( $update ) ? "Receta actualizada" : "Hubo un error al actualizar la receta. :/";
      $recipe[ 'updated' ]    = ( $update ) ? true : false;
      $recipe[ 'old_photo' ]  = $recipe[ 'photo' ];

      /*
       * Passing the recipe information, categories and domain url to the view.
       */
      return view( 'recipes.edit', [
                   'recipe'     => $recipe,
                   'categories' => $this->_categories,
                   'domain'     => $this->_domain ] );
    }
  }

  protected function _getRecipe ( Request $request, Recipes $recipes )
  {
    /*
     * Obtain the recipe information
     */
    $this->_recipe = $recipes->findOrFail( $request->id );
  }

  protected function _setRecipeInfo ( Request $request )
  {
    /*
     * Setting recipe with new info for validation.
     */
    $recipe[ 'name' ]                 = $request[ 'name' ];
    $recipe[ 'photo' ]                = $request[ 'photo' ];
    $recipe[ 'categorie' ]            = $request[ 'categorie' ];
    $recipe[ 'portions' ]             = $request[ 'portions' ];
    $recipe[ 'preparation_time' ]     = $request[ 'preparation_time' ];
    $recipe[ 'cooking_time' ]         = $request[ 'cooking_time' ];
    $recipe[ 'ingredients_desktop' ]  = $request[ 'ingredients_desktop' ];
    $recipe[ 'ingredients_mobile' ]   = $request[ 'ingredients_mobile' ];
    $recipe[ 'preparation' ]          = $request[ 'preparation' ];
    $recipe[ 'ranking' ]              = $request[ 'ranking' ];
    $recipe[ 'active' ]               = ( $request[ 'active' ] ) ? true : false;

    if ( !$request->hasFile( 'photo' ) )
    {
      unset( $recipe[ 'photo' ] );
    }

    return $recipe;
  }

  protected function _getCategories ( RecipesCategories $recipesCategories )
  {
    /*
     * Obtaining categories information
     */
    $categoriesSet  = $recipesCategories->all();

    foreach ( $categoriesSet as $categorie )
    {
      $this->_categories[ $categorie[ 'id' ] ] = $categorie[ 'categorie_name' ];
    }
  }

  protected function _getDomain ( Request $request )
  {
    /*
     * Obtain domain URL
     */
    $this->_domain  = $request->root();
  }

  protected function _uploadPhoto ( Request $request )
  {
    if ( $request->hasFile( 'photo' ) )
    {
      /*
       * Move the photo
       */
      try {
        $file                     = $request->file( 'photo' );
        $destinationPath          = public_path() . '/assets/images/recetas/';
        $filename                 = strtolower( $file->getClientOriginalName() );
        $uploadSuccess            = $file->move( $destinationPath, $filename );
        $this->_recipe[ 'photo' ] = $filename;

        return $uploadSuccess;
      }
      catch ( Exception $e )
      {
        return response()->json( [ 'response_message' => 'Error: File was not uploaded',
                                   'response_code' => '3',
                                   'Error: ' => $e->getError() ] );
      }
    }
  }
}
