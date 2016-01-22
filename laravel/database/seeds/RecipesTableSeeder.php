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
            'user_name'               => $faker->name,
            'user_email'              => $faker->unique()->email,
            'recipe_name'             => $faker->name,
            'recipe_photo'            => $faker->image,
            'recipe_categories'       => $faker->words( 1, true ),
            'recipe_portions'         => $faker->words( 1, true ),
            'recipe_preparation_time' => $faker->words( 1, true ),
            'recipe_cooking_time'     => $faker->words( 1, true ),
            'recipe_ingredients'      => $faker->sentences( 1, true ),
            'recipe_preparation'      => $faker->text
          ] );
        }
    }
}
