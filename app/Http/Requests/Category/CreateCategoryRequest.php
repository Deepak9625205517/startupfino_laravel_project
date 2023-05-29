<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class CreateCategoryRequest extends FormRequest
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
            'name'  => 'required',
            'slug'  => 'required',
            
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'mobile.required' => 'Enter The Mobile Number',
    //         'mobile.numeric' => 'Enter The Valid Mobile Number',
    //         'mobile.size' => 'Enter The 10 Digits Mobile Number',
    //     ];
    // }

    
}
