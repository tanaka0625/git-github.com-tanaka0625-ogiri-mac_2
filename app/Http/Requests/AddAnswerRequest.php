<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\checkNgWord;


class AddAnswerRequest extends FormRequest
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
            'text' => [
                'required',
                new checkNgWord([' ', '　'])
            ]
        ];
    }

    public function messages()
    {
        return [
            'text.required' => '入力してください'
        ];
    }
}
