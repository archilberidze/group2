<?php

namespace app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class teamNameRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(){
        return [
            'name' => 'required',
        ];
    }

}
