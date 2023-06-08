<?php

namespace App\Models\User;
use App\Models\BaseRequest;

class UserLoginRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users|email:rfc,dns',
            'phone' => 'required|digits:10',
            'username' => 'required|max:30',
            'password' => 'required|between:6,12|confirmed',
            'password_confirmation' => 'required|between:6,12',
            'city' => 'required|max:100',
            'district' => 'required|max:100',
            'address_1' => 'required|max:255',
            'address_2' => 'required|max:255',
        ];
    }
}
