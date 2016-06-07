<?php

namespace Frenchs\Http\Requests;

use Frenchs\Http\Requests\Request;

class UploadRecipeFormRequest extends Request
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
      'user_name'         => 'required|max:255',
      'user_email'        => 'required|max:255|email',
      'name'              => 'required|max:255',
      'photo_big'         => 'required|mimes:png,jpeg,jpg',
      'category_id'       => 'required|exists:categories,id',
      'portions'          => 'required|in:1,2,3,4,5,6',
      'preparation_time'  => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'cooking_time'      => 'required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'ingredients'       => 'required|max:255',
      'preparation'       => 'required|max:255'
    ];
  }
}
