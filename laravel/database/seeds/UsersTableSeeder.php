<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table( 'users' )->insert( [
        'name'          => env( 'ADMIN_NAME', 'forge' ),
        'email'         => env( 'ADMIN_EMAIL', 'forge' ),
        'password'      => \Hash::make( env( 'ADMIN_PASSWORD'. 'forge' ) ),
        'created_at'    => date( 'Y-m-d H:i:s' ),
      ] );
    }
}
