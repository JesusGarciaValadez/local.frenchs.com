<?php

namespace App\Http\Controllers;

use App\Recipes;
use App\RecipesCategories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    protected $_subject;

    public function index ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->orderBy( 'created_at' )->take( 6 )->get();

      $categories = $recipesCategories->all();

      return view( 'recetas', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function upload ( Request $request )
    {
      // Retrieving of all input data from contact form
      $data = $request->all();
      unset( $data[ '_token' ] );
      $data[ 'recipe_ingredients_desktop' ] = $data[ 'recipe_ingredients' ];
      $data[ 'recipe_ingredients_mobile' ]  = $data[ 'recipe_ingredients' ];

      unset( $data[ 'recipe_ingredients' ] );

      // Setting the subject for the email sended to alert about a new recipe is sended
      $this->_subject = 'Han enviado una nueva receta.';

      /*
       * Setting validation rules
       */
      $validator = \Validator::make( $data, [
        'user_name'                   => 'required|max:255|alpha',
        'user_email'                  => 'required|max:255|email',
        'recipe_name'                 => 'required|max:255|alpha',
        'recipe_photo'                => 'required|mimes:png,jpeg',
        'recipe_categorie'            => 'required|exists:recipes_categories,id',
        'recipe_portions'             => 'required|in:1,2,3,4,5,6',
        'recipe_preparation_time'     => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
        'recipe_cooking_time'         => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
        'recipe_ingredients_desktop'  => 'required|max:255|alpha_num',
        'recipe_ingredients_mobile'   => 'required|max:255|same:recipe_ingredients_desktop',
        'recipe_preparation'          => 'required|max:255'
      ], [
        'same'    => 'The :attribute and :other must match.',
        'size'    => 'The :attribute must be exactly :size.',
        'between' => 'The :attribute must be between :min - :max.',
        'in'      => 'The :attribute must be one of the following types: :values',
      ] );

      if ( $validator->fails() )
      {
        /*
         * If validation fails, send response via JSON with an error code
         */
        //return response()->json
        dd( [ 'response_message' => 'Validation fail', 'response_code' => '0', 'errors' => $validator->errors()->all(), 'Data: ' => $data ] );
      }
      else
      {
        // Persist the data into the database. Checking if there's an existing recipe with this information.
        // If not, stores the new recipe.
        Recipes::firstOrCreate( $data );

        /*
         * Sending the email alerting about a new recipe.
         */
        \Mail::send( 'emails.message', $data, function( $message ) use ( $request )
        {
          // Setting sender
          $message->from( env( 'CONTACT_MAIL' ), env( 'CONTACT_NAME' ) );

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
}
