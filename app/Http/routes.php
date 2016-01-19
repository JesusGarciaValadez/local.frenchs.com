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

Route::get( '/recetas', [ 'as' => 'recipes', 'uses' => 'RecipesController@index' ] );


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

Route::group(['middleware' => ['web']], function ()
{
  Route::get( '/contacto', [ 'as' => 'contact', 'uses' => 'ContactController@index' ] );
  //
  Route::post( '/contacto', [ 'as' => 'sendContact', 'uses' => 'ContactController@send' ] );
} );
