<?php

namespace App\Http\Requests\Admin\Contact;

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
            'tel'=>'string|nullable',
            'email'=>'string|nullable',
            'address'=>'string|nullable',
            'city'=>'string|nullable',
            'street'=>'string|nullable',
            'number'=>'string|nullable',
            'long'=>'string|nullable',
            'lat'=>'string|nullable',
        ];
    }
}
