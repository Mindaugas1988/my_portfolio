<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'url' =>'required|url',
            'title' => 'required',
            'portfolio_type' => 'required',
            'file' => 'required|image|mimes:jpeg,bmp,png|max:5000',

        ];
    }


    public function messages()
            
{
    return [
        'file.required' => 'File must be not Empty',
        'file.image' => 'Failas must be image',
        'file.mimes:jpeg,bmp,png' => 'Only JPG, BMP, PNG formats',
        'file.max:5000' => 'Max 5 MB size',
        'url.required' => 'Must be not Empty',
        'url.url' => 'Must be URL',
        'title.required' => 'Must be not Empty',
        'portfolio_type.required' => 'Must be not Empty',

    ];
}
}
