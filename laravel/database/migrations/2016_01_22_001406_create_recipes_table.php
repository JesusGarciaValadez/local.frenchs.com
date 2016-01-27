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
            $table->string( 'name' );
            $table->string( 'photo' );
            $table->integer( 'categorie' )->unsigned();
            $table->foreign( 'categorie' )
                  ->references( 'id' )->on( 'recipes_categories' );
            $table->enum( 'portions', [ '1', '2', '3', '4', '5', '6' ] )->default( '1' );
            $table->enum( 'preparation_time', [ '5 min.', '10 mins.', '15 mins.', '20 mins.', '25 mins.', '30 mins.' ] );
            $table->enum( 'cooking_time', [ '5 min.', '10 mins.', '15 mins.', '20 mins.', '25 mins.', '30 mins.' ] );
            $table->string( 'ingredients_desktop' );
            $table->string( 'ingredients_mobile' );
            $table->string( 'preparation' );
            $table->enum( 'ranking', [ '1', '2', '3', '4', '5'] )->default( '1' );
            $table->boolean( 'active' )->default( false );
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
