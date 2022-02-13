<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'author' =>'required',
            'work' => 'required',
            'about_lt' => 'required',
            'about_en' => 'required',
            'about_ru' => 'required',
        ];
    }


        public function messages()
            
{
    return [
        'author.required' => 'Must be not Empty',
        'work.required' => 'Must be not Empty',
        'about_lt.required' => 'Must be not Empty',
        'about_en.required' => 'Must be not Empty',
        'about_ru.required' => 'Must be not Empty',
    ];
}
}
