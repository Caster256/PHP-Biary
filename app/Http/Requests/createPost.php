<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createPost extends FormRequest
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
            'login_name' => 'required|min:6',
            'login_pwd' => 'required',
            'confirm_pwd' => 'same:login_pwd'
        ];
    }

    /**
     * 回傳錯誤的說明
     *
     * @return array
     */
    public function messages()
    {
        return [
            'login_name.required' => '請輸入帳號',
            'login_name.min' => '帳號格式錯誤',
            'login_pwd.required'  => '請輸入密碼',
            'confirm_pwd.same' => '請再次確認密碼',
        ];
    }
}
