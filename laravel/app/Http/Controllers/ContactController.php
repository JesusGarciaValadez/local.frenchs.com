<?php

namespace Frenchs\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Frenchs\Http\Requests\ContactFormRequest;
use Frenchs\Http\Controllers\Controller;

use Event;
use Frenchs\Events\ContactFormSended;

class ContactController extends Controller
{
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

    Event::fire( new ContactFormSended( $data ) );

    return response()->json( [ 'response_message' => 'success', 'response_code' => '1' ] );
  }
}
