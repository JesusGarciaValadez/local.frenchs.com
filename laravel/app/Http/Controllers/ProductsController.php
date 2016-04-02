<?php

namespace frenchs\Http\Controllers;

use frenchs\Recipes;
use frenchs\RecipesCategories;

use Illuminate\Http\Request;

use frenchs\Http\Requests;
use frenchs\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index ()
   	{
   		return view( 'productos' );
   	}

    public function classic ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'classic-sq' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.mustard.clasica-sq', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function classicJar ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'classic-sq-en-frasco' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.mustard.clasica-en-frasco', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function dijon ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'dijon' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.mustard.dijon-sq', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function deli ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'deli' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.mustard.deli-sq', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function honey ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'honey' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.mustard.honey-sq', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function englishSauce ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'inglesa' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.sauce.inglesa', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function bbqSauce ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'bbq' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.sauce.bbq-clasica', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }

    public function bbqChipotleSauce ( Recipes $recipesSet, RecipesCategories $recipesCategories )
    {
      $recipes    = $recipesSet->where( 'active', true )
                               ->where( 'product_name', '=', 'bbq-chipotle' )
                               ->orderBy( 'created_at', 'desc' )
                               ->take( 4 )
                               ->get();

      $categories = $recipesCategories->all();

      return view( 'products.sauce.bbq-chipotle', [ 'recipes' => $recipes, 'categories' => $categories ] );
    }
}
