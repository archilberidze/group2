<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class teamNameRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array {
        return [
            'name' => 'nullable|string',
            'championship' => 'nullable|string',
        ];
    }
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if (!$this->filled('name') && !$this->filled('championship')) {
                $validator->errors()->add('fields', 'At least one of the fields (name or championship) must be provided.');
            }
        });
    }

}
