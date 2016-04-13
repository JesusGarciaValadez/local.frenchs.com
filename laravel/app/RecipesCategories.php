<?php

namespace frenchs;

use Illuminate\Database\Eloquent\Model;

class RecipesCategories extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'name' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = [ 'id', 'created_at', 'updated_at' ];

    // Obtains all the recipes with a categorie
    public function recipes ()
    {
        return $this->hasMany( Recipes::class );
    }
}
