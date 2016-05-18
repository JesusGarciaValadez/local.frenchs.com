<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $_recipes;
    private $_categories;
    private $_NUMBER_OF_RECIPES = 4;

    public function __construct( RecipesCategories $recipesCategories )
    {
      $this->_categories = $recipesCategories->all();
    }

    public function index ()
   	{
   		return view( 'productos' );
   	}

    public function classic ( )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'classic-sq' );

      return $this->_setViewForProduct( 'products.mustard.clasica-sq' );
    }

    public function classicJar ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'classic-sq-en-frasco' );

      return $this->_setViewForProduct( 'products.mustard.clasica-en-frasco' );
    }

    public function dijon ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'dijon' );

      return $this->_setViewForProduct( 'products.mustard.dijon-sq' );
    }

    public function deli ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'deli' );

      return $this->_setViewForProduct( 'products.mustard.deli-sq' );
    }

    public function honey ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'honey' );

      return $this->_setViewForProduct( 'products.mustard.honey-sq' );
    }

    public function englishSauce ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'inglesa' );

      return $this->_setViewForProduct( 'products.sauce.inglesa' );
    }

    public function bbqSauce ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'bbq' );

      return $this->_setViewForProduct( 'products.sauce.bbq-clasica' );
    }

    public function bbqChipotleSauce ( Recipes $recipesSet )
    {
      $this->_recipes = $this->_searchRecipesByProductType( 'bbq-chipotle' );

      return $this->_setViewForProduct( 'products.sauce.bbq-chipotle' );
    }

    public function _searchRecipesByProductType ( $productType )
    {
      $recipesSet = new \frenchs\Recipes();

      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', $productType )
                               ->orderBy( 'created_at', 'desc' )
                               ->get();

      if ( !$recipes->isEmpty() )
      {
        $recipes  = $recipes->random( $this->_NUMBER_OF_RECIPES );
      }

      return $recipes;
    }

    public function _setViewForProduct ( $productView )
    {
      return view( $productView, [ 'recipes' => $this->_recipes, 'categories' => $this->_categories ] );
    }
}
