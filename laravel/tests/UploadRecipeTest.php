<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UploadRecipeTest extends TestCase
{
  /**
   * A basic test example.
   *
   * @return void
   */
  public function testForm()
  {
    // $this->assertTrue(true);
    $this->visit( '/recetas' )
         // ->see('Laravel 5')
         ->type( 'Jesús Antonio García Valadez', 'user_name' )
         ->type( 'jesus.garcia@lunave.com', 'user_email' )
         ->type( 'Alitas BBQ', 'name' )
         ->type( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_big' )
         ->select( '1', 'categorie_id' )
         ->select( '3', 'portions' )
         ->select( '30 mins.', 'preparation_time' )
         ->select( '30 mins.', 'cooking_time' )
         ->type( 'Alitas de pollo', 'ingredients' )
         ->type( 'Freír las alitas de pollo.', 'preparation' );
  }

  public function testJSONResponse ()
  {
    $this->json( 'POST', '/recetas', [
                  'user_name'         => 'Jesús Antonio García Valadez',
                  'user_email'        => 'jesus.garcia@lunave.com',
                  'name'              => 'Alitas BBQ',
                  'photo_big'         => '/Users/jesusgarcia/Downloads/Alitas-C.png',
                  'categorie_id'      => '1',
                  'portions'          => '3',
                  'preparation_time'  => '30 mins.',
                  'cooking_time'      => '30 mins.',
                  'ingredients'       => 'Alitas de pollo',
                  'preparation'       => 'Freír las alitas de pollo.'
                ] )
         ->seeJson( [
                   'response_message' => "Error: There's is not file to upload",
                   'response_code'    => '2'
                  ] );
  }
}
