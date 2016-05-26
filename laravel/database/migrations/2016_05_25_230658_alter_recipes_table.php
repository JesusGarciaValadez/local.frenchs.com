<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterRecipesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table( 'recipes', function ( $table )
    {
      $table->dropForeign( 'recipes_categorie_id_foreign' );
      $table->dropColumn( 'categorie_id' );
      $table->integer( 'category_id' )
            ->unsigned()
            ->after( 'photo_small' );
      $table->foreign( 'category_id' )
            ->references( 'id' )
            ->on( 'categories' );
    } );
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table( 'recipes', function ( $table )
    {
      $table->dropForeign( 'recipes_category_id_foreign' );
      $table->dropColumn( 'category_id' );
      $table->integer( 'categorie_id' )
            ->unsigned()
            ->after( 'photo_small' );
      $table->foreign( 'categorie_id' )
            ->references( 'id' )
            ->on( 'recipes_categories' );
    } );
  }
}
