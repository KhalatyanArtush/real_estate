<?php

namespace App\Http\Requests\Admin\Agent;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'img'=>'mimes:jpg,png,jpeg|max:5048',
            'name'=>'string',
            'profession'=>'string',
            'twitter'=>'string',
            'facebook'=>'string',
            'instagram'=>'string',


        ];
    }
}
