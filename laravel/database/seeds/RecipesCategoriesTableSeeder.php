<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class RecipesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /**
       * Create a new instance of Faker class
       */
      $faker = Faker::create();

      // generate data by accessing properties
      for ( $i = 0; $i <= 9; $i++ )
      {
        DB::table( 'recipes_categories' )->insert( [
          'categorie_name'  => $faker->unique()->word,
          'created_at'      => date( 'Y-m-d H:i:s' ),
        ] );
      }
    }
}
