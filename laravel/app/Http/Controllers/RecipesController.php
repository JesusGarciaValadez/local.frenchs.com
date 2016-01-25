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
        'name'                  => 'required|max:255|alpha',
        'photo'                 => 'required|mimes:png,jpeg',
        'categorie'             => 'required|exists:recipes_categories,id',
        'portions'              => 'required|in:1,2,3,4,5,6',
        'preparation_time'      => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
        'cooking_time'          => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
        'ingredients'           => 'required|max:255',
        'preparation'           => 'required|max:255'
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
        dd( [ 'response_message' => 'Validation fail', 'response_code' => '0', 'errors' => $validator->errors()->all(), 'recipe: ' => $recipe ] );
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
          } catch ( Exception $e ) {
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
        Recipes::firstOrCreate( $recipe );

        /*
         * Sending the email alerting about a new recipe.
         */
        \Mail::send( 'emails.upload', $recipe, function( $message ) use ( $request )
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

    public function search ( Request $request )
    {
      return $request->all();
    }
}
