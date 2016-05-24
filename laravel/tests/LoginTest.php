<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testLogin()
  {
    $this->visit( '/login' )
         ->type( env( 'ADMIN_NAME', 'forge' ), 'email' )
         ->type( env( 'ADMIN_PASSWORD', 'forge' ), 'password' )
         ->press( 'Entrar' )
         ->seePageIs( '/login' );
  }

  public function testLogout ()
  {
    $user = factory( frenchs\User::class )->create();

    $this->actingAs( $user )
         ->visit( '/' )
         ->see( 'Salir' )
         ->click( 'Salir' )
         ->seePageIs( '/' )
         ->dontSee( 'Salir' );
  }
}
