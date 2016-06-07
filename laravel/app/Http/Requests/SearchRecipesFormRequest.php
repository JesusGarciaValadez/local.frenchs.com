<?php

namespace Frenchs\Http\Requests;

use Frenchs\Http\Requests\Request;

class SearchRecipesFormRequest extends Request
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
      'name'              => 'sometimes|required|max:255',
      'category_id'       => 'sometimes|required|exists:categories,id',
      'preparation_time'  => 'sometimes|required|in:5 min.,10 mins.,15 mins.,20 mins.,25 mins.,30 mins.',
      'portions'          => 'sometimes|required|in:1,2,3,4,5,6',
      'ranking'           => 'sometimes|required|in:1,2,3,4,5'
    ];
  }
}
