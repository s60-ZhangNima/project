<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createphotoRequest extends FormRequest
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
            'name'=>'required',
            'desc'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'用户名不能为空',
            'desc.required'=>'描述不能为空',
        ];
    }
}
