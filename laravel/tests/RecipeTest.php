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
}
