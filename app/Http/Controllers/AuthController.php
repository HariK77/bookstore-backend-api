<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $requestData = $request->validated();

        $requestData['password'] = bcrypt($requestData['password']);
        User::create($requestData);

        return $this->sendResponse('User register successfully.', 201);
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        // dd($request->validated());
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            unset($user->email_verified_at);

            return $this->sendResponse([
                'token' => $user->createToken(env('APP_SECRET'))->plainTextToken,
                'user' => $user
            ]);
        }
        else{
            return $this->errorResponse('Invalid credentials. Either Email/Password is incorrect', 401);
        }
    }

    /**
     * Logout/Revoke TOken
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->sendResponse('User logged out successfully.', 200);
    }
}
