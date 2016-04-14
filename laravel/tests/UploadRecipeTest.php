<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UploadRecipeTest.php extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $this->assertTrue(true);
        $this->visit( '/recetas' )
             ->see('Laravel 5')
             ->type('Jesús Antonio García Valadez', 'user_name')
             ->type('jesus.garcia@lunave.com', 'user_email')
             ->type('Alitas BBQ', 'name')
             ->type('C:\\fakepath\\Alitas-C.png', 'photo_big')
             ->select('1', 'categorie_id')
             ->select('3', 'portions')
             ->select('30 mins.', 'preparation_time')
             ->select('30 mins.', 'cooking_time')
             ->type('Alitas de pollo', 'ingredients')
             ->type('Freír las alitas de pollo.', 'preparation')
             ->press('Enviar')
             ->seePageIs('/recetas');
    }
}
