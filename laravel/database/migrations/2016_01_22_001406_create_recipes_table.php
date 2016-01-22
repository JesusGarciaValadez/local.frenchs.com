<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voisd
     */
    public function up()
    {
        Schema::create( 'recipes', function ( Blueprint $table )
        {
            $table->increments( 'id' );
            $table->string( 'user_name' );
            $table->string( 'user_email' );
            $table->string( 'recipe_name' );
            $table->string( 'recipe_photo' );
            $table->string( 'recipe_categories' );
            $table->string( 'recipe_portions' );
            $table->string( 'recipe_preparation_time' );
            $table->string( 'recipe_cooking_time' );
            $table->string( 'recipe_ingredients' );
            $table->string( 'recipe_preparation' );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipes');
    }
}
