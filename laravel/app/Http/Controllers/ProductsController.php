<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class ProductsController extends Controller
{
  /**
   * Set of recipes from the database
   * @var Collection
   */
  private $_recipes;
  /**
   * Set of categories from the database
   * @var Collection
   */
  private $_categories;
  /**
   * Describe the number of recipes filtered from the Collection.
   * @var integer
   */
  private $_NUMBER_OF_RECIPES = 4;

  /**
   * Obtain all the categories in all the views of products.
   * @param RecipesCategories $recipesCategories Model of categories.
   */
  public function __construct( RecipesCategories $recipesCategories )
  {
    $this->_categories = $recipesCategories->all();
  }

  /**
   * Return the view of the products page.
   * @return View View of the products page.
   */
  public function index ()
 	{
 		return view( 'productos' );
 	}

  /**
   * Search recipes made with Classic Mustard and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function classic ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'classic-sq' );

    return $this->_setViewForProduct( 'products.mustard.clasica-sq' );
  }

  /**
   * Search recipes made with Classic Jar Mustard and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function classicJar ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'classic-sq-en-frasco' );

    return $this->_setViewForProduct( 'products.mustard.clasica-en-frasco' );
  }

  /**
   * Search recipes made with Dijon Mustard and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function dijon ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'dijon' );

    return $this->_setViewForProduct( 'products.mustard.dijon-sq' );
  }

  /**
   * Search recipes made with Deli Mustard and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function deli ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'deli' );

    return $this->_setViewForProduct( 'products.mustard.deli-sq' );
  }

  /**
   * Search recipes made with Honey Mustard and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function honey ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'honey' );

    return $this->_setViewForProduct( 'products.mustard.honey-sq' );
  }

  /**
   * Search recipes made with English Sauce and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function englishSauce ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'inglesa' );

    return $this->_setViewForProduct( 'products.sauce.inglesa' );
  }

  /**
   * Search recipes made with BBQ Sauce and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function bbqSauce ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'bbq' );

    return $this->_setViewForProduct( 'products.sauce.bbq-clasica' );
  }

  /**
   * Search recipes made with BBQ Chipotle Flavor Sauce and pass the parameters to his
   * corresponding view.
   * @return View View of the current product.
   */
  public function bbqChipotleSauce ( )
  {
    $this->_recipes = $this->_searchRecipesByProductType( 'bbq-chipotle' );

    return $this->_setViewForProduct( 'products.sauce.bbq-chipotle' );
  }

  /**
   * Retrieve a list of recipes made with the product currently viewed.
   * @param  String     $productType Name of product
   * @return Collection              Collection of records of recipes.
   */
  public function _searchRecipesByProductType ( $productName )
  {
    $recipesSet = new \frenchs\Recipes();

    $recipes    = $recipesSet->where( 'active', true )
                             ->where( 'product_name', '=', $productName )
                             ->orderBy( 'created_at', 'desc' )
                             ->get();

    if ( !$recipes->isEmpty() )
    {
      $recipes  = $recipes->random( $this->_NUMBER_OF_RECIPES );
    }

    return $recipes;
  }

  /**
   * Return the view of a product with his parameters.
   * @param  String $productView Name of the view to use.
   * @return View                View of a product with his parameters.
   */
  public function _setViewForProduct ( $productView )
  {
    return view( $productView, [ 'recipes' => $this->_recipes, 'categories' => $this->_categories ] );
  }
}
