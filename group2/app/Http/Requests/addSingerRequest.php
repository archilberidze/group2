<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addSingerRequest extends FormRequest
{
    public function authorize():bool{
        return true;
    }

    public function rules():array{
        return [
            'name' => 'required',
            'age' => 'required',
            'team_id' => 'nullable',
        ];
    }
}
