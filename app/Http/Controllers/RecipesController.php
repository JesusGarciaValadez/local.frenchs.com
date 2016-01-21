<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecipesController extends Controller
{
    public function index ()
    {
      return view( 'recetas' );
    }

    public function upload ( Request $request )
    {
      // Retrieving of all input data from contact form
      $data = $request->all();
      return $data;

      /*
       * Setting validation rules
       */
      $validator = \Validator::make( $data, [
        'user-name'               => 'required|max:255|alpha',
        'user-email'              => 'required|max:255|email|alpha_dash',
        'recipe-name'             => 'required|max:255|alpha',
        'recipe-photo'            => 'required|mimes:png,jpeg',
        'recipe-categories'       => 'required|max:255|alpha|exists:recipes_categories,name',
        'recipe-portions'         => 'required|max:255|alpha_num|in:1,2,3,4,5,6',
        'recipe-preparation-time' => 'required|max:255|alpha_num|in:5 minutos,10 minutos,15 minutos,20 minutos,25 minutos,30 minutos',
        'recipe-cooking-time'     => 'required|max:255|alpha_num|in:5 minutos,10 minutos,15 minutos,20 minutos,25 minutos,30 minutos',
        'recipe-ingredients'      => 'required|max:255|alpha_num',
        'recipe-preparation'      => 'required|max:255|alpha_num'
      ] );

      if ( $validator->fails() )
      {
        /*
         * If validation fails, send response via JSON with an error code
         */
        // return redirect( 'home' )
        //     ->withInput()
        //     ->withErrors( $validator );
        return response()->json( [ 'response_message' => 'error', 'response_code' => '0' ] );
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
        return response()->json( [ 'response_message' => 'success', 'response_code' => '1' ] );
      }
    }
}
