<?php

namespace App\Http\Requests\Admin\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title'=>'string',
            'text'=>'string',
            'lat'=>'string',
            'long'=>'string',
        ];
    }
}
