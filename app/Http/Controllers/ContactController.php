<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    protected $_subject = '';

    public function index ()
   	{
   		return view( 'contacto' );
   	}

    public function send ( Request $request )
    {
      // Retrieving of all input data from contact form
      $data = $request->all();

      $this->_subject = 'Formulario de contacto';

      /*
       * Setting validation rules
       */
      $validator = \Validator::make( $data, [
        'name'      => 'required|max:255',
        'email'     => 'required|email|max:255',
        'comments'  => 'required|max:255',
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
