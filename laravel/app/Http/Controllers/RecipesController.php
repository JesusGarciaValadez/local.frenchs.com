<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class RecipesController extends Controller
{
  protected $_subject;
  protected $_search = [];

  public function index ( Recipes $recipesSet, RecipesCategories $recipesCategories )
  {
    $recipes    = $recipesSet->where( 'active', true )->orderBy( 'created_at', 'desc' )->take( 6 )->get();

    $categories = $recipesCategories->all();

    return view( 'recetas', [ 'recipes' => $recipes, 'categories' => $categories ] );
  }

  public function upload ( Request $request )
  {
    // Retrieving of all input recipe from contact form
    $recipe = $request->all();

    // Setting the subject for the email sended to alert about a new recipe is sended
    $this->_subject = 'Han enviado una nueva receta.';

    /*
     * Setting validation rules
     */
    $validator = \Validator::make( $recipe, [
      'user_name'             => 'required|max:255',
      'user_email'            => 'required|max:255|email',
      'name'                  => 'required|max:255',
      'photo'                 => 'required|mimes:png,jpeg',
      'categorie'             => 'required|exists:recipes_categories,id',
      'portions'              => 'required|in:1,2,3,4,5,6',
      'preparation_time'      => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'cooking_time'          => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'ingredients'           => 'required|max:255',
      'preparation'           => 'required|max:255'
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
      return response()->json( [ 'response_message' => 'Validation fail', 'response_code' => '0', 'errors' => $validator->errors()->all(), 'recipe: ' => $recipe ] );
    }
    else
    {
      // If there's a file, then uploading it
      if ( $request->hasFile( 'photo' ) )
      {
        try {
          $file               = $request->file( 'photo' );
          $destinationPath    = public_path() . '/assets/images/recetas/';
          $filename           = strtolower( $recipe[ 'photo' ]->getClientOriginalName() );
          $uploadSuccess      = $file->move( $destinationPath, $filename );
          $recipe[ 'photo' ]  = $filename;
        }
        catch ( Exception $e )
        {
          return response()->json( [ 'response_message' => 'Error: File was not uploaded', 'response_code' => '3', 'Error: ' => $e->getError() ] );
        }
      }
      else
      {
        return response()->json( [ 'response_message' => "Error: There's is not file to upload", 'response_code' => '2' ] );
      }

      $recipe[ 'categorie' ]            = intval( $recipe[ 'categorie' ] );
      $recipe[ 'ingredients_desktop' ]  = $recipe[ 'ingredients' ];
      $recipe[ 'ingredients_mobile' ]   = $recipe[ 'ingredients' ];

      unset( $recipe[ '_token' ] );
      unset( $recipe[ 'ingredients' ] );

      // Persist the recipe into the database. Checking if there's an existing recipe with this information.
      // If not, stores the new recipe.
      $recipe[ 'id' ] = Recipes::firstOrCreate( $recipe );

      /*
       * Sending the email alerting about a new recipe.
       */
      \Mail::send( 'emails.upload', [ 'recipe' => $recipe ], function( $message )
      {
        // Setting sender
        $message->from( env( 'CONTACT_SENDER' ), env( 'UPLOAD_APP_NAME' ) );

        // Setting subject
        $message->subject( $this->_subject );

        // Setting receiver
        $message->to( env( 'CONTACT_MAIL' ), env( 'CONTACT_NAME' ) );
      } );

      /*
       * Response via JSON with a success code.
       */
      return response()->json( [ 'response_message' => 'Success', 'response_code' => '1' ] );
    }
  }

  public function search ( Request $request )
  {
    //  Obtain all the request parameters
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

    if ( empty( $recipe[ 'categorie' ] ) )
    {
      unset( $recipe[ 'categorie' ] );
    }
    else
    {
      array_push( $this->_search, "categorie = '${recipe[ 'categorie' ]}'" );
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
      'name'                  => 'sometimes|required|max:255',
      'categorie'             => 'sometimes|required|exists:recipes_categories,id',
      'preparation_time'      => 'sometimes|required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'portions'              => 'sometimes|required|in:1,2,3,4,5,6',
      'ranking'               => 'sometimes|required|in:1,2,3,4,5'
    ], [
      'same'    => 'The :attribute and :other must match.',
      'size'    => 'The :attribute must be exactly :size.',
      'between' => 'The :attribute must be between :min - :max.',
      'in'      => 'The :attribute must be one of the following types: :values',
    ] );

    // If validation fails, send a json response with validation fail message
    if ( $validator->fails() )
    {
      return response()->json( [ 'response_message' => 'Validation fail', 'response_code' => '0', 'errors' => $validator->errors()->all() ] );
    }
    else
    {
      $search = implode( 'OR ', array_flatten( $this->_search ) );
      $search = ( !empty( $search ) ) ? $search . " AND active = true" : "";

      if ( !empty( $search ) )
      {
        // Check if there's a recipe with the parameters received
        $recipes    = Recipes::whereRaw( $search )
                             ->orderBy( 'created_at', 'desc' )
                             ->get();

        $categories = RecipesCategories::all();

        return view( 'recetas', [ 'recipes' => $recipes, 'categories' => $categories ] );
      }
      else
      {
        return back( )->withInput( );
      }
    }
  }
}
