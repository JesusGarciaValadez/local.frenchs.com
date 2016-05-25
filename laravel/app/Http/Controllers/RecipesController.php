<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class RecipesController extends Controller
{
  /**
   * Subject of the email to send if a user upload a recipe.
   * @var String
   */
  protected $_subject;
  /**
   * Array to form a query string depends of the parameters received in the request.
   * @var array
   */
  protected $_search = [];

  /**
   * Return the 'recetas' view with recipes and categories as parameters.
   * @param  Request           $request           The parameters of the request of the page.
   * @param  Recipes           $recipesSet        Model of the Recipes.
   * @param  RecipesCategories $recipesCategories Model of the Categories.
   * @return View                                 View 'recipes' returned with recipes and categories as paremeters.
   */
  public function index ( Request $request, Recipes $recipesSet, RecipesCategories $recipesCategories )
  {
    $recipes    = $recipesSet->where( 'active', true )
                             ->paginate( 6 );

    $categories = $recipesCategories->all();

    return view( 'recetas', compact( 'recipes', 'categories' ) );
  }

  /**
   * Set a recipe into the database
   * @param  Request $request The parameters of the request of the page.
   * @return String           JSON response with a message and code.
   */
  public function upload ( Request $request )
  {
    $recipe         = $request->all();
    unset( $recipe[ 'Enviar' ] );

    $this->_subject = 'Han enviado una nueva receta.';

    $validator = \Validator::make( $recipe, [
      'user_name'         => 'required|max:255',
      'user_email'        => 'required|max:255|email',
      'name'              => 'required|max:255',
      'photo_big'         => 'required|mimes:png,jpeg,jpg',
      'categorie_id'      => 'required|exists:recipes_categories,id',
      'portions'          => 'required|in:1,2,3,4,5,6',
      'preparation_time'  => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'cooking_time'      => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'ingredients'       => 'required|max:255',
      'preparation'       => 'required|max:255'
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
      return response()->json( [
                                'response_message'  => 'Validation fail',
                                'response_code'     => '0',
                                'errors'            => $validator->errors()->all(),
                                'recipe'            => $recipe
                              ] );
    }
    else
    {
      if ( $request->hasFile( 'photo_big' ) )
      {
        try
        {
          $file                   = $request->file( 'photo_big' );
          $destinationPath        = public_path() . '/assets/images/recetas/';
          $filename               = strtolower( $recipe[ 'photo_big' ]->getClientOriginalName() );
          $uploadSuccess          = $file->move( $destinationPath, $filename );
          $recipe[ 'photo_big' ]  = $filename;
        }
        catch ( Exception $e )
        {
          return response()->json( [
                                    'response_message' => 'Error: File was not uploaded',
                                    'response_code' => '3',
                                    'Error: ' => $e->getError()
                                  ] );
        }
      }
      else
      {
        return response()->json( [
                                  'response_message' => "Error: There's is not file to upload",
                                  'response_code' => '2'
                                ] );
      }

      $recipe[ 'categorie_id' ]         = intval( $recipe[ 'categorie_id' ] );
      $recipe[ 'ingredients_desktop' ]  = $recipe[ 'ingredients' ];
      $recipe[ 'ingredients_mobile' ]   = $recipe[ 'ingredients' ];

      unset( $recipe[ '_token' ] );
      unset( $recipe[ 'ingredients' ] );

      // Persist the recipe into the database. Checking if there's an existing recipe with this information.
      // If not, stores the new recipe.
      $recipe[ 'id' ] = Recipes::firstOrCreate( $recipe );
      $recipes        = Recipes::findOrFail( [ 'id' => $recipe[ 'id' ]->id ] );

      \Mail::send( 'emails.upload', [ 'recipes' => $recipes ], function( $message )
      {
        $message->from( env( 'CONTACT_SENDER' ), env( 'UPLOAD_APP_NAME' ) );
        $message->subject( $this->_subject );
        $message->to( env( 'CONTACT_MAIL' ), env( 'CONTACT_NAME' ) );
      } );

      return response()->json( [
                                'response_message' => 'Success',
                                'response_code' => '1'
                              ] );
    }
  }

  /**
   * Search a recipe into database and retrieve it as a JSON.
   * @param  Request $request The parameters of the request of the page.
   * @return String           JSON response with a message and code.
   */
  public function search ( Request $request )
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

    if ( empty( $recipe[ 'categorie_id' ] ) )
    {
      unset( $recipe[ 'categorie_id' ] );
    }
    else
    {
      array_push( $this->_search, "categorie_id = '${recipe[ 'categorie_id' ]}'" );
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

    $validator = \Validator::make( $recipe, [
      'name'              => 'sometimes|required|max:255',
      'categorie_id'      => 'sometimes|required|exists:recipes_categories,id',
      'preparation_time'  => 'sometimes|required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'portions'          => 'sometimes|required|in:1,2,3,4,5,6',
      'ranking'           => 'sometimes|required|in:1,2,3,4,5'
    ], [
      'same'    => 'The :attribute and :other must match.',
      'size'    => 'The :attribute must be exactly :size.',
      'between' => 'The :attribute must be between :min - :max.',
      'in'      => 'The :attribute must be one of the following types: :values',
    ] );

    if ( $validator->fails() )
    {
      return response()->json( [
                                'response_message' => 'Validation fail',
                                'response_code' => '0',
                                'errors' => $validator->errors()->all()
                               ] );
    }
    else
    {
      $search = implode( 'AND ', array_flatten( $this->_search ) );
      $search = ( !empty( $search ) ) ? $search . " AND active = true" : "active = true";

      if ( !empty( $search ) )
      {
        $recipes    = Recipes::whereRaw( $search )
                             ->orderBy( 'created_at', 'desc' )
                             ->get();

        $categories = RecipesCategories::all();

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
}
