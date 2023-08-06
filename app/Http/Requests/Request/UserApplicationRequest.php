<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserApplicationRequest extends FormRequest
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
            
            'name'=>'required|string|min:2',
              
            'numberPhone'=>'required|string',
             
            'cvText'=>'required',
             
            'cv'=>'required',
            
            'jobTitleId'=>'required',
           
            'company'=>'required|string',
             
            'dateStart'=>'required|string',
           
            'industry'=>'required',
           
            'higestLevel'=>'required|string',
           
            'school'=>'required|string|max:250',
           
            'dateComplated'=>'required',
           
            'nameSkills'=>'required',
            'userId'=>'required'
        ];
    }
}
