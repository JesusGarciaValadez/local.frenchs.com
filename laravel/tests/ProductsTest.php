<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * Test products landing page availability.
   *
   * @return void
   */
  public function testProductsAvailability ()
  {
    $this->visit( '/' )
         ->click( 'PRODUCTOS' )
         ->assertResponseOk()
         ->seePageIs( '/productos' )
         ->see( "French's® Clásica Yellow - Mostaza Clásica" )
         ->see( "French's® Clásica Yellow - Mostaza Clásica en frasco" )
         ->see( "French's® Mostaza Dijon" )
         ->see( "French's® Mostaza Deli" )
         ->see( "French's® Mostaza Honey - Sabor agridulce" )
         ->see( "French's® Worcestershire Sauce - Salsa inglesa" )
         ->see( "Nueva French's® BBQ Classic - Salsa BBQ Clásica" )
         ->see( "Nueva French's® BBQ Chipotle - Salsa BBQ - Sabor chipotle" );
  }

  /**
   * Test Clásica Mustard landing page avalability.
   *
   * @return void
   */
  public function testClassicMustardAvailability ()
  {
    $this->visit('/producto/mostaza/clasica-sq')
         ->assertResponseOk()
         ->see( "Mostaza Clásica" )
         ->see( "Recetas" )
         ->see( "que podrías preparar con Mostaza Clásica" );
  }
}
