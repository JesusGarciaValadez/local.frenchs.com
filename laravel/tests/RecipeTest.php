<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecipeTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testChoripanRecipe ()
  {
    $this->visit( '/receta/3' )
         ->assertResponseOk()
         ->seePageIs( '/receta/3' )
         ->see( "Choripan <span>con mostaza picante y cebollas caramelizadas</span>" );
  }

  public function testChapataRecipe ()
  {
    $response = $this->call( 'GET', '/receta/17' );

    $this->assertEquals( 404, $response->status() );
  }

  public function testEditRecipe ()
  {
    $user = factory( Frenchs\User::class )->create();

    $this->actingAs( $user )
         ->visit( "/editar-receta/16" )
         ->type( 'Jesús García', 'name' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_big' )
         ->attach( '/Users/jesusgarcia/Downloads/Alitas-C.png', 'photo_small' )
         ->select( '3', 'category_id' )
         ->select( '3', 'portions' )
         ->select( '5 min.', 'preparation_time' )
         ->select( '10 mins.', 'cooking_time' )
         ->type( 'ingredientes', 'ingredients_desktop' )
         ->type( 'Ingredientes', 'ingredients_mobile' )
         ->type( 'Preparación', 'preparation' )
         ->select( '4', 'ranking' )
         ->select( 'honey', 'product_name' )
         ->uncheck( 'active' )
         ->press( 'Actualizar' )
         ->seePageIs( '/editar-receta/16' )
         ->see( 'Jesús García' );
  }
}
