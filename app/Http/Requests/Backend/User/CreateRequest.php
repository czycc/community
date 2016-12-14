<?php

namespace App\Http\Requests\Backend\User;

use App\Http\Requests\Request;

class CreateRequest extends Request
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
            'name' => "required|min:2|unique:users",
            'email' => "required|email|unique:users",
            'password' => 'required|between:8,30',
            'permission' => 'required',
            'sex' => 'required',
            'phone' => 'max:13',
            'more' => 'max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '姓名必须填写',
            'name.min'      => '姓名最小不能小于两字符',
            'name.unique' => '姓名已经被占用',
            'email.required'=> '登录邮箱必须填写',
            'email.unique'=> '登录邮箱必须唯一',
            'email.email'=> '请填写合法的邮箱',
            'password.required'=> '请填写登录密码',
            'password.between'=> '请填写8-30位的密码',
            'permission.required' => '用户权限必须填写',
            'phone.max' => '请填写11-13位手机号码',
            'more.max' => '备注不能超过255位'
        ];
    }
}
