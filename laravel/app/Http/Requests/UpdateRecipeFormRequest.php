<?php

namespace Frenchs\Http\Requests;

use Frenchs\Http\Requests\Request;

class UpdateRecipeFormRequest extends Request
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name'                => 'required|max:255',
      'photo_big'           => 'sometimes|image|mimes:png,jpeg',
      'photo_small'         => 'sometimes|image|mimes:png,jpeg',
      'category_id'         => 'required|exists:categories,id',
      'portions'            => 'required|in:1,2,3,4,5,6',
      'preparation_time'    => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'cooking_time'        => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'ingredients_desktop' => 'required|max:1500',
      'ingredients_mobile'  => 'required|max:1500',
      'preparation'         => 'required|max:1500',
      'ranking'             => 'required|in:1,2,3,4,5',
      'product_name'        => 'required|in:classic-sq,classic-sq-en-frasco,dijon,deli,honey,inglesa,bbq,bbq-chipotle',
      'active'              => 'required'
    ];
  }
}
