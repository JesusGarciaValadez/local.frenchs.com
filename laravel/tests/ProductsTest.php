<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProductsTest extends TestCase
{
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
           ->see( "French's Classic Yellow - Mostaza Clásica" )
           ->see( "French's Classic Yellow - Mostaza Clásica en frasco" )
           ->see( "French's Mostaza Dijon" )
           ->see( "French's Mostaza Deli" )
           ->see( "Frenchs' Mostaza Honey - Sabor agridulce" )
           ->see( "French's Worcestershire Sauce - Salsa inglesa" )
           ->see( "Nueva French's BBQ Classic - Salsa BBQ Clásica" )
           ->see( "Nueva French's BBQ Chipotle - Salsa BBQ sabor chipotle" );
    }


    public function testClassicMustardAvailability ()
    {
      $this->visit('/producto/mostaza/clasica-sq')
           ->assertResponseOk()
           ->see( "Mostaza Clásica" );
    }
}
