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

  public function testEditRecipe ()
  {
    $user = factory( frenchs\User::class )->create();

    $this->actingAs( $user )
         ->visit( "/editar-receta/16" )
         ->type( 'Jesús García', 'name' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_big' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_small' )
         ->select( '3', 'categorie_id' )
         ->select( '3', 'portions' )
         ->select( '5 min.', 'preparation_time' )
         ->select( '10 mins.', 'cooking_time' )
         ->type( 'ingredientes', 'ingredients_desktop' )
         ->type( 'Ingredientes', 'ingredients_mobile' )
         ->type( 'Preparación', 'preparation' )
         ->select( '4', 'ranking' )
         ->select( 'honey', 'product_name' )
         ->check( 'active' )
         ->press( 'Actualizar' )
         ->seePageIs( '/editar-receta/16' )
         ->see( 'Jesús García' );
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
