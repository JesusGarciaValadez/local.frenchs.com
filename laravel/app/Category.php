<?php

namespace frenchs;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [ 'name' ];

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table    = 'categories';

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $guarded = [ 'id', 'created_at', 'updated_at' ];

  /**
   * Obtains all the recipes within a categorie
   */
  public function recipes ()
  {
      return $this->hasMany( Recipe::class );
  }
}
