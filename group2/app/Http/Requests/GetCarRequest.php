<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class GetCarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
   
    public function rules(): array
    {
        return [
            'id' =>'required|integer|exists:teams,id'
        ];
    }
}
