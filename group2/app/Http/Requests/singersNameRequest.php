<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class singersNameRequest extends FormRequest
{
  public function authorize():bool
  {
      return true;
  }

  public function rules():array
  {
      return [
          'name' => 'required',
      ];
  }
}
