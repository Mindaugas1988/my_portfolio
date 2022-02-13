<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            //
            'email' =>'required|email',
            'name' => 'required',
            'message' => 'required',
        ];
    }


            public function messages()
            
{
    return [
        'email.required' => 'Must be not Empty',
        'email.email' => 'Email invalid',
        'name.required' => 'Must be not Empty',
        'message.required' => 'Must be not Empty',
    ];
}
}
