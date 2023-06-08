<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User\UserRepository;
use App\Models\User\UserLoginRequest;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    public function store(UserLoginRequest $request)
    {
        return UserRepository::store($request); 
    }

    public function show(Request $request)
    {
        return $request->user();
    }
}
