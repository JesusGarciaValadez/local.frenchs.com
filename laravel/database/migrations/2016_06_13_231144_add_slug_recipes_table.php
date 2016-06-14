<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugRecipesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table( 'recipes', function ( Blueprint $table ) {
      $table->text( 'slug' )
            ->after( 'active' )
            ->nullable();
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table( 'recipes', function ( Blueprint $table ) {
      $table->dropColumn( 'slug' );
    } );
  }
}
