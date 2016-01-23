<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'user_name',
      'user_email',
      'recipe_name',
      'recipe_photo',
      'recipes_categories_id',
      'recipe_portions',
      'recipe_preparation_time',
      'recipe_cooking_time',
      'recipe_ingredients_desktop',
      'recipe_ingredients_mobile',
      'recipe_preparation',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = [ 'id', 'created_at', 'updated_at' ];
}
