<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCategoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table( 'categories', function ( Blueprint $table ) {
      $table->renameColumn( 'categorie_name', 'name' );
    } );
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table( 'categories', function ( Blueprint $table ) {
        $table->renameColumn( 'name', 'categorie_name' );
      } );
    }
}
