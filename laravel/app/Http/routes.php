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

Route::get( '/sobre-nosotros', [ 'as' => 'about', 'uses' => 'AboutController@index' ] );

Route::get( '/productos', [ 'as' => 'products', 'uses' => 'ProductsController@index' ] );

Route::get( '/receta/{id}', [ 'as' => 'recipeID', 'uses' => 'RecipeController@index' ] );

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
  Route::get( '/recetas', [ 'as' => 'recipes', 'uses' => 'RecipesController@index' ] );

  Route::get( '/buscar-recetas', [ 'as' => 'searchRecipe', 'uses' => 'RecipesController@search' ] );

  Route::post( '/recetas', [ 'as' => 'uploadRecipe', 'uses' => 'RecipesController@upload' ] );

  Route::get( '/contacto', [ 'as' => 'contact', 'uses' => 'ContactController@index' ] );

  Route::post( '/contacto', [ 'as' => 'sendContact', 'uses' => 'ContactController@send' ] );
} );

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "auth.user" middleware group to every route
| it contains. The "auth.user" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and user authentication.
|
*/

Route::group( [ 'middleware' => [ 'auth.user' ] ], function () {
  Route::get( '/editar-receta/{id}', [ 'as' => 'updateRecipe', 'uses' => 'RecipeController@update' ] );
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
    Route::get( 'clasica-sq', [ 'as' => 'clasica-sq', function() { return view( 'producto.mostaza.clasica-sq' ); } ] );
    Route::get( 'clasica-en-frasco', [ 'as' => 'clasica-frasco', function() { return view( 'producto.mostaza.clasica-en-frasco' ); } ] );
    Route::get( 'dijon-sq', [ 'as' => 'dijon', function() { return view( 'producto.mostaza.dijon-sq' ); } ] );
    Route::get( 'deli-sq', [ 'as' => 'deli', function() { return view( 'producto.mostaza.deli-sq' ); } ] );
    Route::get( 'honey-sq', [ 'as' => 'honey', function() { return view( 'producto.mostaza.honey-sq' ); } ] );
  } );

  // Sauces
  Route::group( [ 'prefix' => 'salsa' ], function () {
    Route::get( 'inglesa', [ 'as' => 'inglesa', function() { return view( 'producto.salsa.inglesa' ); } ] );
  } );
} );
