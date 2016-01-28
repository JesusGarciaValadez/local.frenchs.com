<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', [ 'as' => 'home', 'uses' => 'HomeController@index' ] );

Route::get( 'sobre-nosotros', [ 'as' => 'about', 'uses' => 'AboutController@index' ] );

Route::get( 'productos', [ 'as' => 'products', 'uses' => 'ProductsController@index' ] );

Route::get( 'receta/{id}', [ 'as' => 'recipeID', 'uses' => 'RecipeController@index' ] );

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group( [ 'middleware' => [ 'web' ] ], function ()
{
  Route::get( 'recetas', [ 'as' => 'recipes', 'uses' => 'RecipesController@index' ] );

  Route::get( 'buscar-recetas', [ 'as' => 'searchRecipe', 'uses' => 'RecipesController@search' ] );

  Route::post( 'recetas', [ 'as' => 'uploadRecipe', 'uses' => 'RecipesController@upload' ] );

  Route::get( 'editar-receta/{id}', [ 'as' => 'updateRecipe', 'middleware' => 'auth', 'uses' => 'RecipeController@update' ] );

  Route::put( 'editar-receta', [ 'as' => 'updatedRecipe', 'middleware' => 'auth', 'uses' => 'RecipeController@updated' ] );

  Route::get( 'contacto', [ 'as' => 'contact', 'uses' => 'ContactController@index' ] );

  Route::post( 'contacto', [ 'as' => 'sendContact', 'uses' => 'ContactController@send' ] );

  Route::auth();
} );

/*
|--------------------------------------------------------------------------
| Products group related
|--------------------------------------------------------------------------
*/
Route::group( [ 'prefix' => 'producto' ], function ()
{
  // Mustards
  Route::group( [ 'prefix' => 'mostaza' ], function () {
    Route::get( 'clasica-sq', [ 'as' => 'clasica-sq', function() { return view( 'products.mustard.clasica-sq' ); } ] );
    Route::get( 'clasica-en-frasco', [ 'as' => 'clasica-frasco', function() { return view( 'products.mustard.clasica-en-frasco' ); } ] );
    Route::get( 'dijon-sq', [ 'as' => 'dijon', function() { return view( 'products.mustard.dijon-sq' ); } ] );
    Route::get( 'deli-sq', [ 'as' => 'deli', function() { return view( 'products.mustard.deli-sq' ); } ] );
    Route::get( 'honey-sq', [ 'as' => 'honey', function() { return view( 'products.mustard.honey-sq' ); } ] );
    Route::get( 'bbq-chipotle', [ 'as' => 'bbq-chipotle', function() { return view( 'products.mustard.bbq-chipotle' ); } ] );
  } );

  // Sauces
  Route::group( [ 'prefix' => 'salsa' ], function () {
    Route::get( 'inglesa', [ 'as' => 'inglesa', function() { return view( 'products.sauce.inglesa' ); } ] );
  } );
} );
