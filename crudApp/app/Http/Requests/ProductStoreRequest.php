<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            
            'name'=>'required|String',
            'price'=>'required|numeric',
            'description'=>'required'
        
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'နာမည်ထည့်ပါ။',
            'name.string' => 'နာမည်ကို စာသားဖြင့်ရေးပါ။'
        ];
    }
}
