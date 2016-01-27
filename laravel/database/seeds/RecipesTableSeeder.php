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
        'user_name'           => $faker->name,
        'user_email'          => $faker->unique()->email,
        'name'                => $faker->name,
        'photo'               => 'receta-detalle.jpg',
        'categorie'           => $faker->numberBetween( 1, 10 ),
        'portions'            => $faker->numberBetween( 1, 6 ),
        'preparation_time'    => $faker->randomElement( [ '5 min.','10 mins.','15 mins.','20 mins.','25 mins.','30 mins.' ] ),
        'cooking_time'        => $faker->randomElement( [ '5 min.','10 mins.','15 mins.','20 mins.','25 mins.','30 mins.' ] ),
        'ingredients_desktop' => $faker->sentences( 1, true ),
        'ingredients_mobile'  => $faker->sentences( 1, true ),
        'preparation'         => $faker->text,
        'ranking'             => $faker->numberBetween( 1, 5 ),
        'active'              => $faker->boolean(),
        'created_at'          => date( 'Y-m-d H:i:s' ),
      ] );
    }
  }
}
