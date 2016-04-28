<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AboutTest extends TestCase
{
  /**
   * A test for check about us section availability
   *
   * @return void
   */
  public function testAboutAvailability()
  {
      $this->visit( '/sobre-nosotros' );
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
         ->see( 'Descúbre porque<br><span>French’s</span> es la compañía<br>perfecta para tu mesa.' )
         ->see( 'La Mostaza <span>French’s</span> se presentó al público en 1904' )
         ->see( 'En 1974 se presenta el empaque de<br><span>French’s</span> para apretar la botella' );
  }
}
