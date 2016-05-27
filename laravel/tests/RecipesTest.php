<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecipesTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Search a recipe.
   *
   * @return void
   */
  public function testSearchRecipe ()
  {
    $this->visit('/')
         ->visit('/recetas')
         ->type('Alitas bbq', 'name')
         ->select('1', 'category_id')
         ->select('30 mins.', 'preparation_time')
         ->select('3', 'portions')
         ->select('5', 'ranking')
         ->press('buscar');
  }

  /**
   * Upload a new recipe.
   *
   * @return void
   */
  public function testUploadRecipe ()
  {
    $this->visit( '/recetas' )
         ->seePageIs( 'recetas' )
         ->type( 'Jesús Antonio García Valadez', 'user_name' )
         ->type( 'jesus.garcia@lunave.com', 'user_email' )
         ->type( 'Alitas BBQ', 'name' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_big' )
         ->select( '1', 'category_id' )
         ->select( '3', 'portions' )
         ->select( '30 mins.', 'preparation_time' )
         ->select( '30 mins.', 'cooking_time' )
         ->type( 'Alitas de pollo', 'ingredients' )
         ->type( 'Freír las alitas de pollo.', 'preparation' )
         ->press( 'Enviar' )
         ->seeJson( [ 'response_message' => 'Success', 'response_code' => '1' ] )
         ->seeInDatabase( 'recipes', [
                          'name'      => 'Alitas BBQ',
                          'photo_big' => 'Alitas-C.png'
                        ] );
  }
}
