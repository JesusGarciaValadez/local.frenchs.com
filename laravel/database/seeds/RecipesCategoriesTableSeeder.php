<?php

use Illuminate\Database\Seeder;

class RecipesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // generate data by accessing properties
      DB::table( 'recipes_categories' )->insert( [
        'categorie_name'  => 'botana',
        'created_at'      => date( 'Y-m-d H:i:s' ),
      ] );

      DB::table( 'recipes_categories' )->insert( [
        'categorie_name'  => 'entrada',
        'created_at'      => date( 'Y-m-d H:i:s' ),
      ] );

      DB::table( 'recipes_categories' )->insert( [
        'categorie_name'  => 'plato fuerte',
        'created_at'      => date( 'Y-m-d H:i:s' ),
      ] );
    }
}
