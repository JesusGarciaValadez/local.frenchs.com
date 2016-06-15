<?php

namespace Frenchs\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Frenchs\Http\Requests;
use Frenchs\Http\Controllers\Controller;

use Frenchs\Recipe;

class ManagerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index( )
  {
    $recipes = Recipe::with( 'category' )
                      ->paginate( 10 );

    return view( 'admin.manager' )->withRecipes( $recipes );
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy( $id, Request $request )
  {
    Recipe::destroy( $id );

    if ( $request->ajax() )
    {
      return response()->json( [ 'message' => 'Receta eliminada' ] );
    }
    else
    {
      return \Redirect()->back()
                        ->withMessage( 'Receta eliminada' )
                        ->withType( 'success' );
    }
  }
}
