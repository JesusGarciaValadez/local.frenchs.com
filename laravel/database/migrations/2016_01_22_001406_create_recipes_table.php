<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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
            $table->integer( 'recipes_categories_id' )->unsigned();
            $table->foreign( 'recipes_categories_id' )
                  ->references( 'id' )->on( 'recipes_categories' )
                  ->onUpdate( 'cascade' );
            $table->enum( 'recipe_portions', [ '1', '2', '3', '4', '5', '6' ] )->default( '1' );
            $table->enum( 'recipe_preparation_time', [ '5 min.', '10 mins.', '15 mins.', '20 mins.', '25 mins.', '30 mins.' ] );
            $table->enum( 'recipe_cooking_time', [ '5 min.', '10 mins.', '15 mins.', '20 mins.', '25 mins.', '30 mins.' ] );
            $table->string( 'recipe_ingredients_desktop' );
            $table->string( 'recipe_ingredients_mobile' );
            $table->string( 'recipe_preparation' );
            $table->enum( 'recipe_ranking', [ '1', '2', '3', '4', '5'] )->default( '1' );
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
