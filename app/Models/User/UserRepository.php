<?php

namespace App\Models\User;
use App\Models\User;

class UserRepository
{
    public static function store(UserLoginRequest $request)
    {
        $dataUser = $request->only(['username', 'password', 'email', 'phone']);
        $dataUser['name'] = $request->first_name . ' ' . $request->last_name;

        $dataUserDetail = $request->only(['first_name', 'last_name', 'city', 'district', 'address_1', 'address_2']);

        \DB::beginTransaction();
        try {
            $user = User::create($dataUser);

            $dataUserDetail['user_id'] = $user->id;
            UserDetail::create($dataUserDetail);
            \DB::commit();
        } catch (\Throwable $th) {
            \DB::rollBack();
            \Log::error($th->getMessage());
            abort(500, 'có lỗi hệ thống.');
        }
        $token = $user->createToken($user->name);
 
        return ['token' => $token->plainTextToken];
    }
}
