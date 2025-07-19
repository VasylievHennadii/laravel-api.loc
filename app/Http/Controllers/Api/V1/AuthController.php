<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        return 'Register';
    }

    public function login(LoginUserRequest $request)
    {
        return 'Login';
    }

    public function logout()
    {
        return 'Logout';
    }
}
