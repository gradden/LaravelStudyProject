<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\LoginRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use PHPOpenSourceSaver\JWTAuth\Providers\Auth\Illuminate;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $user = User::where('email', '=', $request->email)->firstOrFail();
        //$isValid = Hash::check($request->password, $user->password);

        if(!Hash::check($request->password, $user->password)){
            return response()->json('Not permitted.');
        }
        //$token = $user->createToken('accessToken');
        $token = auth()->login($user);
        return response()->json(['accessToken' => $token]);
    }
}
