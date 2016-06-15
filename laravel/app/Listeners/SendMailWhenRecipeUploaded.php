<?php

namespace Frenchs\Listeners;

use Frenchs\Events\RecipeUploaded;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailWhenRecipeUploaded
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RecipeUploaded  $event
     * @return void
     */
    public function handle(RecipeUploaded $event)
    {
        \Mail::send( 'emails.upload', [ 'recipes' => $event->recipes ], function( $message )
        {
          $message->from( env( 'CONTACT_SENDER', 'forge' ), env( 'CONTACT_APP_NAME', 'forge' ) );
          $message->subject( "Han enviado una nueva receta." );
          $message->to( env( 'CONTACT_MAIL', 'forge' ), env( 'CONTACT_NAME', 'forge' ) );
        } );
    }
}
