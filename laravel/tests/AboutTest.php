<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AboutTest extends TestCase
{
  use DatabaseTransactions;

  /**
   * A test for check about us section availability
   *
   * @return void
   */
  public function testAboutAvailability()
  {
      $this->visit( '/' )
           ->click( 'SOBRE NOSOTROS' )
           ->assertResponseOk()
           ->seePageIs( '/sobre-nosotros' );
  }

  /**
   * A basic test example.
   *
   * @return void
   */
  public function testAboutUsSection()
  {
    $this->visit( '/' )
         ->click( 'SOBRE NOSOTROS' )
         ->seePageIs( '/sobre-nosotros' )
         ->see( "En 1974 se presenta el empaque de<br><span>French's®</span> para apretar la botella" )
         ->see( "La Mostaza <span>French's®</span> se presentó al público en 1904" );
  }
}
