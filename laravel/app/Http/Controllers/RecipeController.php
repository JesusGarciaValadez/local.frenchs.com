<?php

namespace Frenchs\Http\Controllers;

use Frenchs\Recipe;
use Frenchs\Category;

use Illuminate\Http\Request;

use Frenchs\Http\Requests;
use Frenchs\Http\Requests\UpdateRecipeFormRequest;
use Frenchs\Http\Controllers\Controller;

class RecipeController extends Controller
{
  /**
   * Array of recipes.
   * @var array
   */
  protected $_recipe          = [];
  /**
   * Array of categories.
   * @var array
   */
  protected $_categories      = [];
  /**
   * Domain in the URL of the application.
   * @var string
   */
  protected $_domain          = "";
  /**
   * Quantity of recipes to show in the recipes examples.
   * @var integer
   */
  protected $_number_of_recipes_to_show = 6;

  /**
   * Display the recipe information with some example recipes.
   * @param  Request  $request    The parameters of the request of the page.
   * @param  Recipe   $recipes    Model of the recipes.
   * @param  Category $categories Model of the categories of the recipes.
   * @return View                 View with the recipe information.
   */
  public function index ( Request $request, Recipe $recipe, Category $category )
  {
    $recipe     = $recipe->findOrFail( $request->id );
    $recipes    = Recipe::where( 'active', '1' )
                         ->with( 'category' )
                         ->inRandomOrder()
                         ->take( $this->_number_of_recipes_to_show )
                         ->get();

    $categories = $category->all();

    if ( $recipe->active )
    {
      return view( 'detalle-receta', [
                   'recipe'     => $recipe,
                   'recipes'    => $recipes,
                   'categories' => $categories
                  ] );
    }
    else
    {
      return redirect( '/recetas' );
    }
  }

  /**
   * Show the recipe for edit the information.
   * @param  Request           $request           The parameters of the request of the page.
   * @return View                                 View with the recipe information.
   */
  public function update ( Request $request )
  {
    $this->_recipe      = $this->_getRecipe( $request );
    $this->_categories  = $this->_getCategories( );
    $this->_domain      = $this->_getDomain( $request );

    $recipe[ 'id' ]                   = $this->_recipe[ 'id' ];
    $recipe[ 'name' ]                 = $this->_recipe[ 'name' ];
    $recipe[ 'photo_big' ]            = "";
    $recipe[ 'photo_small' ]          = "";
    $recipe[ 'old_photo_big' ]        = $this->_recipe[ 'photo_big' ];
    $recipe[ 'old_photo_small' ]      = $this->_recipe[ 'photo_small' ];
    $recipe[ 'category_id' ]          = $this->_recipe[ 'category_id' ];
    $recipe[ 'portions' ]             = $this->_recipe[ 'portions' ];
    $recipe[ 'preparation_time' ]     = $this->_recipe[ 'preparation_time' ];
    $recipe[ 'cooking_time' ]         = $this->_recipe[ 'cooking_time' ];
    $recipe[ 'ingredients_desktop' ]  = $this->_recipe[ 'ingredients_desktop' ];
    $recipe[ 'ingredients_mobile' ]   = $this->_recipe[ 'ingredients_mobile' ];
    $recipe[ 'preparation' ]          = $this->_recipe[ 'preparation' ];
    $recipe[ 'ranking' ]              = $this->_recipe[ 'ranking' ];
    $recipe[ 'product_name' ]         = $this->_recipe[ 'product_name' ];
    $recipe[ 'active' ]               = ( $this->_recipe[ 'active' ] ) ? 'checked' : '';

    /*
     * Passing the recipe information, categories and domain url to the view
     */
    return view( 'recipes.edit', [
                 'recipe'     => $recipe,
                 'categories' => $this->_categories,
                 'domain'     => $this->_domain
                ] );
  }

  /**
   * Update the information of the recipe given.
   * @param  Request    $request    The parameters of the request of the page.
   * @param  Recipe     $recipe     Model of the recipes.
   * @param  Categories $categories Model of the categories of the recipes.
   * @return mixed                  Return the response if there's an error or the view with hiw parameters.
   */
  public function updated ( UpdateRecipeFormRequest $request )
  {
    $this->_recipe      = $this->_getRecipe( $request );

    $recipe         = $this->_setRecipeInfo( $request );
    $recipe[ 'id' ] = $this->_recipe[ 'id' ];

    /*
     * If there's a file, then uploading it.
     */
    $recipe[ 'photo_big' ]    = ( $this->_movePhoto( $request, 'photo_big' ) ) ? $this->_recipe[ 'photo_big' ] : $request->old_photo_big;
    $recipe[ 'photo_small' ]  = ( $this->_movePhoto( $request, 'photo_small' ) ) ? $this->_recipe[ 'photo_small' ] : $request->old_photo_small;

    /*
     * Persist the new data into the database.
     */
    $update = Recipe::where( 'id', $request[ 'id' ] )
                    ->update( $recipe );

    /*
     * Create a response for passing it into the view.
     */
    $message        = ( $update ) ? "Receta actualizada" : "Hubo un error al actualizar la receta. :/";
    $type           = ( $update ) ? "success" : "danger";

    /*
     * Passing the recipe information, categories and domain url to the view.
     */
    return \Redirect::route( 'manageRecipes' )
                    ->withType( $type )
                    ->withMessage( $message );
  }

  /**
   * Obtain the recipe information
   * @param  Request $request The parameters of the request of the page.
   * @param  Recipe  $recipe  Model of the recipes.
   * @return void.
   */
  protected function _getRecipe ( Request $request )
  {
    return Recipe::findOrFail( $request->id );
  }

  /**
   * Setting recipe with new info for validation.
   * @param Request $request The parameters of the request of the page.
   */
  protected function _setRecipeInfo ( Request $request )
  {
    $recipe[ 'name' ]                 = $request[ 'name' ];
    $recipe[ 'photo_big' ]            = $request[ 'photo_big' ];
    $recipe[ 'photo_small' ]          = $request[ 'photo_small' ];
    $recipe[ 'category_id' ]          = $request[ 'category_id' ];
    $recipe[ 'portions' ]             = $request[ 'portions' ];
    $recipe[ 'preparation_time' ]     = $request[ 'preparation_time' ];
    $recipe[ 'cooking_time' ]         = $request[ 'cooking_time' ];
    $recipe[ 'ingredients_desktop' ]  = $request[ 'ingredients_desktop' ];
    $recipe[ 'ingredients_mobile' ]   = $request[ 'ingredients_mobile' ];
    $recipe[ 'preparation' ]          = $request[ 'preparation' ];
    $recipe[ 'ranking' ]              = $request[ 'ranking' ];
    $recipe[ 'product_name' ]         = $request[ 'product_name' ];
    $recipe[ 'active' ]               = ( $request[ 'active' ] ) ? true : false;

    if ( !$request->hasFile( 'photo' ) )
    {
      unset( $recipe[ 'photo' ] );
    }

    return $recipe;
  }

  /**
   * Get all the categories and fill an array with the categories and his names.
   * @param  RecipesCategories $recipesCategories Model of the recipes.
   * @return void.
   */
  protected function _getCategories ( )
  {
    /*
     * Obtaining categories information
     */
    $categoriesSet  = Category::all();

    foreach ( $categoriesSet as $category )
    {
      $categories[ $category[ 'id' ] ] = $category[ 'name' ];
    }

    return $categories;
  }

  /**
   * Get the domain of the URL.
   * @param  Request $request The parameters of the request of the page.
   * @return void.
   */
  protected function _getDomain ( Request $request )
  {
    return $request->root();
  }

  /**
   * Move the photo to the images folder.
   * @param  Request $request The parameters of the request of the page.
   * @param  string  $photo   Name of the image.
   * @return mixed            Response if the image was moved.
   */
  protected function _movePhoto ( Request $request, $photo )
  {
    if ( $request->hasFile( $photo ) )
    {
      try {
        $file                         = $request->file( $photo );
        $destinationPath              = public_path() . '/assets/images/recetas/';
        $filename                     = strtolower( $file->getClientOriginalName() );
        $uploadSuccess                = $file->move( $destinationPath, $filename );
        $this->_recipe[ $photo ]      = $filename;

        return $uploadSuccess;
      }
      catch ( Exception $e )
      {
        return response()->json( [
                                  'response_message' => 'Error: File was not uploaded',
                                  'response_code'    => '3',
                                  'Error: '          => $e->getError()
                                 ] );
      }
    }
  }
}
