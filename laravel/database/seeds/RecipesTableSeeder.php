<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class RecipesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $faker = Faker::create();

    for( $i = 0; $i <= 19; $i++ )
    {
      DB::table( 'recipes' )->insert( [
        'user_name'                   => $faker->name,
        'user_email'                  => $faker->unique()->email,
        'recipe_name'                 => $faker->name,
        'recipe_photo'                => 'receta-detalle.jpg',
        'recipes_categories_id'       => $faker->numberBetween( 1, 10 ),
        'recipe_portions'             => $faker->numberBetween( 1, 6 ),
        'recipe_preparation_time'     => $faker->randomElement( [ '5 min.','10 mins.','15 mins.','20 mins.','25 mins.','30 mins.' ] ),
        'recipe_cooking_time'         => $faker->randomElement( [ '5 min.','10 mins.','15 mins.','20 mins.','25 mins.','30 mins.' ] ),
        'recipe_ingredients_desktop'  => $faker->sentences( 1, true ),
        'recipe_ingredients_mobile'   => $faker->sentences( 1, true ),
        'recipe_preparation'          => $faker->text,
        'recipe_ranking'              => $faker->numberBetween( 1, 5 )
      ] );
    }
  }
}
