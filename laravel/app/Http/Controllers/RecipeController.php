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
      return view( 'detalle-receta' );
      $recipes    = $recipesSet->orderBy( 'created_at' )->take( 6 )->get();
      $categories = $recipesCategories->all();

      return view( 'recetas', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function upload ( Request $request )
    {
      // Retrieving of all input data from contact form
      $data = $request->all();

      /*
       * Setting validation rules
       */
      $validator = \Validator::make( $data, [
        'user_name'               => 'required|max:255|alpha',
        'user_email'              => 'required|max:255|email|alpha_dash',
        'recipe_name'             => 'required|max:255|alpha',
        'recipe_photo'            => 'required|mimes:png,jpeg',
        'recipe_categories'       => 'required|max:255|alpha|exists:recipes_categories,name',
        'recipe_portions'         => 'required|max:255|alpha_num|in:1,2,3,4,5,6',
        'recipe_preparation_time' => 'required|max:255|alpha_num|in:5 minutos,10 minutos,15 minutos,20 minutos,25 minutos,30 minutos',
        'recipe_cooking_time'     => 'required|max:255|alpha_num|in:5 minutos,10 minutos,15 minutos,20 minutos,25 minutos,30 minutos',
        'recipe_ingredients'      => 'required|max:255|alpha_num',
        'recipe_preparation'      => 'required|max:255|alpha_num'
      ] );

      if ( $validator->fails() )
      {
        /*
         * If validation fails, send response via JSON with an error code
         */
        // return redirect( 'home' )
        //     ->withInput()
        //     ->withErrors( $validator );
        return response()->json( [ 'response_message' => 'Validation fail', 'response_code' => '0' ] );
      }
      else
      {
        /*
         * Sending the email
         */
        \Mail::send( 'emails.message', $data, function( $message ) use ( $request )
        {
          // Setting sender
          $message->from( $request->email, $request->name );

          // Setting subject
          $message->subject( $this->_subject );

          // Setting receiver
          $message->to( env( 'CONTACT_MAIL' ), env( 'CONTACT_NAME' ) );
        } );

        /*
         * Response via JSON with a success code
         */
        return response()->json( [ 'response_message' => 'Success', 'response_code' => '1' ] );
      }
    }

    public function show ( )
    {

    }
}
