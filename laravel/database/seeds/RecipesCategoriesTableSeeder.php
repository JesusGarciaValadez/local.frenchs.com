<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // generate data by accessing properties
      DB::table( 'categories' )->insert( [
        'name'        => 'botana',
        'created_at'  => date( 'Y-m-d H:i:s' ),
      ] );

      DB::table( 'categories' )->insert( [
        'name'        => 'entrada',
        'created_at'  => date( 'Y-m-d H:i:s' ),
      ] );

      DB::table( 'categories' )->insert( [
        'name'        => 'plato fuerte',
        'created_at'  => date( 'Y-m-d H:i:s' ),
      ] );
    }
}
