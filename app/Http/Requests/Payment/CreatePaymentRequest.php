<?php

namespace App\Http\Requests\Payment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;


class CreatePaymentRequest extends FormRequest
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
            'name' => 'required',
            'mobile_number' => 'required|numeric|min:10',
            'email' => 'required|email',
            'state_id' => 'required',
            'agree' => 'required',
            'subscription_type' => 'required',
            
        ];
    }
    
    public function messages()
    {
        return [
            'state_id.required' => 'The state field is required.',
            'agree.required'    => 'Agree to Terms & Conditions checkbox before submitting',
        ];
    }

    
}
