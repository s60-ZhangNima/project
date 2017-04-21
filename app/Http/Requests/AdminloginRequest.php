<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminloginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
//        dd(111);
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
           'email' => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => '邮箱不能为空',
            'password.required' => '密码不能为空',

        ];
    }
}
