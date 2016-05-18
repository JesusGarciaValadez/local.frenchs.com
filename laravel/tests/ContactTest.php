<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactAvailability ()
    {
      $this->visit( '/' )
           ->click( 'CONTACTO' )
           ->seePageIs( '/contacto' )
           ->assertResponseOk();
    }

    public function testSendContact ()
    {
      $this->visit( '/contacto' )
           ->type( 'Jesús Antonio García Valadez', 'name' )
           ->type( 'jesus.garcia@lunave.com', 'email' )
           ->type( 'Este es un mensaje de prueba', 'comments' )
           ->press( 'SEND' )
           ->seePageIs( '/contacto' )
           ->assertResponseOk();
    }
}
