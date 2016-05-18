<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RecipeTest extends TestCase
{
  use DatabaseMigrations;

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
    $this->visit( '/receta/17' )
         ->assertResponseStatus( '404' )
         ->assertRedirectTo( '/recetas' )
         ->seePageIs( '/recetas' )
         ->dontSee( "Alitas BBQ" );
  }
}
