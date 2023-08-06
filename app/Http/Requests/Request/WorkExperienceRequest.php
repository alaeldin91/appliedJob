<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceRequest extends FormRequest
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
            
            'jobTitleId'=>'required',
            
            'company'=>'required|string|250',

            'dateStart'=>'required|string',

            'industryId' =>'required',

            'userId'=>'required'
        ];
    }
}
