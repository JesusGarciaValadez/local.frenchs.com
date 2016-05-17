<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UploadRecipeTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testForm()
  {
    $this->visit( '/recetas' )
         ->seePageIs( 'recetas' )
         ->type( 'Jesús Antonio García Valadez', 'user_name' )
         ->type( 'jesus.garcia@lunave.com', 'user_email' )
         ->type( 'Alitas BBQ', 'name' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_big' )
         ->select( '1', 'categorie_id' )
         ->select( '3', 'portions' )
         ->select( '30 mins.', 'preparation_time' )
         ->select( '30 mins.', 'cooking_time' )
         ->type( 'Alitas de pollo', 'ingredients' )
         ->type( 'Freír las alitas de pollo.', 'preparation' )
         ->press( 'Enviar' )
         ->seeJson( [ 'response_message' => 'Success', 'response_code' => '1' ] )
         ->seeInDatabase( 'recipes', [ 'name' => 'Alitas BBQ' ] );
  }
}
