<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'HigestLevel'=>'required|string|max:255',

             'school'=>'required|string|max:255',

             'dateCompleted'=>'required|date',

             'userId'=>'required'
        ];
    }
}
