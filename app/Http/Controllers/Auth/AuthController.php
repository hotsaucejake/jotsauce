<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginAuthRequest;
use App\Http\Requests\Auth\RegisterAuthRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(RegisterAuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json([
                'status' => 'success',
                'message' => 'Successfully created user!',
                'data' => [
                        'username' => $validated['username'],
                        'email' => $validated['email'],
                    ],
            ], 201);
    }

    public function login(LoginAuthRequest $request)
    {
        $validated = $request->validated();

        $attempt = Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']]);

        if (! $attempt) {
            return response()->json([
                    'status' => 'error',
                    'message' => 'Wrong credentials.',
                    'data' => [],
                ], 401);
        }

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();

        return response()->json([
                'status' => 'success',
                'message' => 'Successfully logged in!',
                'data' => [
                        'access_token' => $tokenResult->accessToken,
                        'token_type' => 'Bearer',
                        'expires_at' => Carbon::parse(
                            $tokenResult->token->expires_at
                        )->toDateTimeString(),
                    ],
            ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
                'status' => 'success',
                'message' => 'Successfully logged out!',
                'data' => [],
            ], 200);
    }

    public function user(Request $request)
    {
        return response()->json([
                'status' => 'success',
                'message' => 'Current user',
                'data' => $request->user(),
            ], 200);
    }
}
