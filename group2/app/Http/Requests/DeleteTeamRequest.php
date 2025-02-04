<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeleteTeamRequest extends FormRequest
{
    public function authorize():bool{
        return true;
    }

    public function rules():array{
        return [
            'id'=>'required|integer'
        ];
    }

}
