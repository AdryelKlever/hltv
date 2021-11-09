<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimeRequest extends FormRequest
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
            'twitter' => 'required',
            'instagram' => 'required',
            'wordlranking' => 'required',
            'weekstop30' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do time',
            'twitter.required' => 'Informe o Twitter do time',
            'instagram.required' => 'Informe o Instagram do time',
            'wordlranking.required' => 'Informe a posição no ranking mundial',
            'weekstop30.required' => 'Informe quantos dias o time ficou no top 30',
        ];
    }
}
