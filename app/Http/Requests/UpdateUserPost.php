<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

class UpdateUserPost extends FormRequest
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
            'name' => ['required', 'alpha_dash', 'between:2,60', Rule::unique('users')->ignore(Auth::user())],
            'email' => ['required', 'email'],
            'introduction' => ['max:80'],
            'avatar' => ['mimes:jpg,png,jpeg,gif', 'dimensions:min_width=208,min_height=208'],
        ];
    }

    /**
     * 获取已定义验证规则的错误消息。
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '用户名不能为空',
            'name.alpha_dash' => '用户名只支持英文、数字、横杠和下划线',
            'name.between' => '用户名必须介于 2 - 60 个字符之间',
            'name.unique' => '用户名已被占用，请重新填写',
            'avatar.mimes' => '不是图片',
            'avatar.dimensions' => '图片不清晰'
        ];
    }
}
