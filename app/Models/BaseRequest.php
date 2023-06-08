<?php

namespace App\Models;
use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'first_name' => 'họ của bạn',
            'last_name' => 'tên của bạn',
            'phone' => 'số điện thoại',
            'district' => 'quận/huyện',
            'address_1' => 'xã/phường',
            'address_2' => 'số nhà',
            'password' => 'mật khẩu',
            'password_confirmation' => 'xác nhận mật khẩu'
        ];
    }

    public function rules()
    {
        return [];
    }

    public function messages() {
        return [
            'required' => ':attribute bắt buộc nhập.',
            'unique' => ':attribute đã đăng ký.',
            'max' => 'giá trị tối đa của :attribute là :max.',
            'between' => ':attribute có giá trị từ :min - :max.',
            'size' => ':attribute có độ dài là :size ký tự.',
            'numeric' => ':attribute phải là dạng số.',
            'confirmed' => ':attribute và :attribute xác nhận không khớp.',
            'digits' => ':attribute phải là dạng số và tối đa :digits số.',
        ];
    }
}
