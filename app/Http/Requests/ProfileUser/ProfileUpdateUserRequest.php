<?php

namespace App\Http\Requests\ProfileUser;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:15',
            'email' => 'required|email|unique:users,email,'.$this->profile,
            'phone' => 'required|numeric|digits:10|unique:users,phone,'.$this->profile,
            // 'image' => 'image',

            // 'current_password' => 'required',
            // 'new_password' => 'required|min:6',//|different:current_password
            // 'new_password_confirmation' => 'required|same:new_password'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên là trường bắt buộc.',
            'name.max' => 'Tên không được vượt quá 15 ký tự.',
            'email.required' => 'Email là trường bắt buộc.',
            'email.email' => 'Email phải là địa chỉ email hợp lệ.',
            'email.unique' => 'Email đã được sử dụng bởi người dùng khác.',
            'phone.required' => 'Số điện thoại là trường bắt buộc.',
            'phone.numeric' => 'Số điện thoại chỉ được chứa số.',
            'phone.digits' => 'Số điện thoại phải có 10 chữ số.',
            'phone.unique' => 'Số điện thoại đã được sử dụng bởi người dùng khác.',
            'current_password.required' => 'Password là trường bắt buộc.',
            'new_password' => 'Password là trường bắt buộc.',
            'new_password.min' => 'Password tối thiểu 6 số',
            // 'new_password.different' => 'Mật khẩu đang được sử dụng',
            'new_password_confirmation' =>  'Password là trường bắt buộc.',
            'new_password_confirmation.same' =>  'Mật khẩu không trùng khớp',
        ];
    }
}
