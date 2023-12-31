<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'name' => [
                'required',
                'string',
                'max:100'
            ],
            'kana_name' => [
                'required',
                'string',
                'max:100'
            ],
        'address' => [
            'required',
            'string',
            'max:100'
        ],
        'tel' => [
            'required',
            'string',
            'max:11'
        ],
        'representative' => [
            'required',
            'string',
            'max:100'
        ],
        'kana_representative' => [
            'required',
            'string',
            'max:100'
        ]
        ];
    }
}
