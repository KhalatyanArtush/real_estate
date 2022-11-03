<?php

namespace App\Http\Requests\myPage;

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
            'agent_id'=>'integer',
            'sum'=>[
                'firstSum'=>'integer',
                'endSum'=>'integer'
            ],
            'buy_rent_id'=>'integer',
            'city_id'=>'integer',
            'region_id'=>'integer',
            'type_id'=>'integer',
            'building_type_id'=>'integer',
            'floor'=>'integer',
            'room'=>'integer',
            'swimming'=>'string',
            'informations'=>'string',
//            'files' => 'mimes:jpg,png,jpeg'
        ];
    }
}
