<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'slideImage' => [
                'image',
                'mimes:jpeg,png,jpg,gif,svg'
            ],
            'slideTitle' => [
                'required',
            ]
        ];
    }
}
