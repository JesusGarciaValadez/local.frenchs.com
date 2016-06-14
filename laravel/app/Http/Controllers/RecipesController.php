<?php

namespace Frenchs\Http\Controllers;

use Frenchs\Recipe;
use Frenchs\Category;

use Illuminate\Http\Request;

use Frenchs\Http\Requests;
use Frenchs\Http\Requests\UploadRecipeFormRequest;
use Frenchs\Http\Requests\SearchRecipesFormRequest;
use Frenchs\Http\Controllers\Controller;

use Event;
use Frenchs\Events\RecipeUploaded;

use \Cviebrock\EloquentSluggable\Services\SlugService;

class RecipesController extends Controller
{
  /**
   * Array to form a query string depends of the parameters received in the request.
   * @var array
   */
  protected $_search = [];

  /**
   * Return the 'recetas' view with recipes and categories as parameters.
   * @param  Request  $request  The parameters of the request of the page.
   * @param  Recipe   $recipe   Model of the Recipes.
   * @param  Category $category Model of the Categories.
   * @return View               View 'recipes' returned with recipes and categories as paremeters.
   */
  public function index ( Request $request, Recipe $recipe, Category $category )
  {
    $recipes    = $recipe->where( 'active', true )
                         ->with( 'category' )
                         ->inRandomOrder()
                         ->paginate( 6 );

    $categories = $category->all();

    return view( 'recetas', compact( 'recipes', 'categories' ) );
  }

  /**
   * Set a recipe into the database
   * @param  Request $request The parameters of the request of the page.
   * @return String           JSON response with a message and code.
   */
  public function upload ( UploadRecipeFormRequest $request )
  {
    $recipe         = $request->all();
    unset( $recipe[ 'Enviar' ] );

    $file                   = $request->file( 'photo_big' );
    $destinationPath        = public_path() . '/assets/images/recetas/';
    $filename               = strtolower( $recipe[ 'photo_big' ]->getClientOriginalName() );
    $uploadSuccess          = $file->move( $destinationPath, $filename );
    $recipe[ 'photo_big' ]  = $filename;

    $recipe[ 'category_id' ]          = intval( $recipe[ 'category_id' ] );
    $recipe[ 'ingredients_desktop' ]  = $recipe[ 'ingredients' ];
    $recipe[ 'ingredients_mobile' ]   = $recipe[ 'ingredients' ];

    $recipe[ 'slug' ]                 = SlugService::createSlug( Recipe::class, 'slug', $request->name );

    unset( $recipe[ '_token' ] );
    unset( $recipe[ 'ingredients' ] );

    // Persist the recipe into the database. Checking if there's an existing recipe with this information.
    // If not, stores the new recipe.
    $recipe[ 'id' ] = Recipe::firstOrCreate( $recipe );
    $recipes        = Recipe::findOrFail( [ 'id' => $recipe[ 'id' ]->id ] );

    Event::fire( new RecipeUploaded( $recipes ) );

    return response()->json( [
                              'response_message' => 'Success',
                              'response_code' => '1'
                            ] );
  }

  /**
   * Search a recipe into database and retrieve it as a JSON.
   * @param  Request $request The parameters of the request of the page.
   * @return String           JSON response with a message and code.
   */
  public function search ( SearchRecipesFormRequest $request )
  {
    $recipe   = $request->all();

    // Prepare raw query
    if ( empty( $recipe[ 'name' ] ) )
    {
      unset( $recipe[ 'name' ] );
    }
    else
    {
      array_push( $this->_search, "name like '%${recipe[ 'name' ]}%'" );
    }

    if ( empty( $recipe[ 'category_id' ] ) )
    {
      unset( $recipe[ 'categorie_id' ] );
    }
    else
    {
      array_push( $this->_search, "category_id = '${recipe[ 'category_id' ]}'" );
    }

    if ( empty( $recipe[ 'preparation_time' ] ) )
    {
      unset( $recipe[ 'preparation_time' ] );
    }
    else
    {
      array_push( $this->_search, "preparation_time = '${recipe[ 'preparation_time' ]}'" );
    }

    if ( empty( $recipe[ 'portions' ] ) )
    {
      unset( $recipe[ 'portions' ] );
    }
    else
    {
      array_push( $this->_search, "portions = '${recipe[ 'portions' ]}'" );
    }

    if ( empty( $recipe[ 'ranking' ] ) )
    {
      unset( $recipe[ 'ranking' ] );
    }
    else
    {
      array_push( $this->_search, "ranking = '${recipe[ 'ranking' ]}'" );
    }

    $search = implode( 'AND ', array_flatten( $this->_search ) );
    $search = ( !empty( $search ) ) ? $search . " AND active = true" : "active = true";

    if ( !empty( $search ) )
    {
      $recipes    = Recipe::whereRaw( $search )
                           ->orderBy( 'created_at', 'desc' )
                           ->get();

      $categories = Category::all();

      return response()->json( $recipes );
    }
    else
    {
      return response()->json( [
                                'response_message' => 'Search fail',
                                'response_code' => '4',
                                'errors' => $validator->errors()->all()
                               ] );
    }
  }
}
