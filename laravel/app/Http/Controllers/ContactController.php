<?php

namespace Frenchs\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Frenchs\Http\Requests\ContactFormRequest;
use Frenchs\Http\Controllers\Controller;

class ContactController extends Controller
{
  /**
   * Subject of the email sended when a user fills and send the contact form.
   * @var string
   */
  protected $_subject = '';

  /**
   * Show the 'contacto' view.
   * @return View
   */
  public function index ()
  {
    return view( 'contacto' );
  }

  /**
   * Receive the user's data from the contact form.
   * @param  ContactFormRequest $request Parameters of the request of the page.
   * @return String                      JSON response with a message and code.
   */
  public function send ( ContactFormRequest $request )
  {
    $data = $request->all();

    $this->_subject = 'Formulario de contacto';

    \Mail::send( 'emails.contact', [ 'contact' => $data ], function( $message )
    {
      $message->from( env( 'CONTACT_SENDER', 'forge' ), env( 'CONTACT_APP_NAME', 'forge' ) );
      $message->subject( $this->_subject );
      $message->to( env( 'CONTACT_MAIL', 'forge' ), env( 'CONTACT_NAME', 'forge' ) );
    } );

    return response()->json( [ 'response_message' => 'success', 'response_code' => '1' ] );
  }
}
