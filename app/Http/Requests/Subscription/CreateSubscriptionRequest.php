<?php

namespace App\Http\Requests\Subscription;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class CreateSubscriptionRequest extends FormRequest
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
            'title'             => 'required',
            'description'       => 'required',
            'days'              => 'required|numeric',
            'type'              => 'required',
            'price'             => 'required|regex:/^\d+(\.\d{1,2})?$/',
            // 'document_quantity' => 'required|numeric',
            
        ];
    }
    
    public function messages()
    {
        return [
            'price.required'            => 'Please Enter The Subscription Price',
            'price.regex'               => 'After Decimal Point Only Two digits Valid',
        ];
    }

    
}
