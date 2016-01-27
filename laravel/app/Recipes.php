<?php

namespace frenchs;

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
      'name',
      'photo',
      'categorie',
      'portions',
      'preparation_time',
      'cooking_time',
      'ingredients_desktop',
      'ingredients_mobile',
      'preparation',
      'ranking',
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
}
