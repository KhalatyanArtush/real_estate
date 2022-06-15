<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'key'=>'string',
            'title'=>'string',
            'agent'=>'string',
            'sum'=>'integer',
            'buy_rent'=>'string',
            'country'=>'string',
            'region'=>'string',
            'type'=>'string',
            'building_type'=>'string',
            'floor'=>'integer',
            'room'=>'integer',
            'swimming'=>'string',
            'informations'=>'string',

        ];
    }
}
