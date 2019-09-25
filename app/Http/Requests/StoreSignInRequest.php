<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSignInRequest extends FormRequest
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
            'email' => 'required|max:20|min:6|unique:users|email',
            'password' => 'required|max:20|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập Email',
            'email.max' => 'Email không quá 20 ký tự',
            'email.min' => 'Email phải dài hơn 6 ký tự',
            'email.unique'=>'Email đã được sử dụng, vui lòng nhập đúng email',
            'email.email'=>'Không đúng định dạng email',
            'password.required' => 'Vui lòng nhập password',
            'password.max'=>'Password không quá 20 ký tự',
            'password.min'=>'Password phải dài hơn 6 ký tự'
            ];
    }
}
