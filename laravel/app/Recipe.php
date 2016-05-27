<?php

namespace frenchs;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_name',
    'user_email',
    'name',
    'photo_big',
    'photo_small',
    'category_id',
    'portions',
    'preparation_time',
    'cooking_time',
    'ingredients_desktop',
    'ingredients_mobile',
    'preparation',
    'ranking',
    'product_name',
    'active'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $guarded  = [ 'id', 'ingredients', 'created_at', 'updated_at' ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden   = [ '_token' ];

  /**
   * Set this category field belonging to category class.
   */
  public function category ()
  {
    return $this->belongsTo( Category::class );
  }
}
