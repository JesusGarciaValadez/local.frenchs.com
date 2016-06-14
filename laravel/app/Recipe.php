<?php

namespace Frenchs;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Recipe extends Model
{
  use Sluggable;

  /**
   * Return the sluggable configuration array for this model.
   *
   * @return array
   */
  public function sluggable ()
  {
    return [
      'title-slug' => [
        'source' => 'name'
      ]
    ];
  }

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
    'active',
    'slug'
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

  public function getActiveAttribute ( $value )
  {
    return ( $value === 1 ) ? 'Si' : 'No';
  }
}
