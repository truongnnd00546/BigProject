<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSignUpRequest extends FormRequest
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
            'username' => 'required|max:20|min:6|unique:users',
            'email' => 'required|max:20|min:6|unique:users|email',
            'password' => 'required|max:20|min:6',
            'confirmPassword' => 'required|max:20|min:6|same:password'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên người dùng',
            'username.max' => 'Tên không được quá 20 ký tự',
            'username.min' => 'Tên phải dài hơn 6 ký tự',
            'username.unique' => 'Tên đã được sử dụng, vui lòng nhập tên khác',
            'email.required' => 'Vui lòng nhập Email',
            'email.max' => 'Email không quá 20 ký tự',
            'email.min' => 'Email phải dài hơn 6 ký tự',
            'email.unique' => 'Email đã được sử dụng, vui lòng nhập đúng email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập password',
            'password.max' => 'Password không quá 20 ký tự',
            'password.min' => 'Password phải dài hơn 6 ký tự',
            'confirmPassword.required' => 'Vui lòng nhập lại password',
            'confirmPassword.same' => 'Password không trùng nhau, vui lòng nhập lại',
        ];
    }
}
