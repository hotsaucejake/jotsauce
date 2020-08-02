<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterAuthRequest;
use App\Http\Resources\User as UserResource;
use App\User;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterAuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json(new UserResource($user), 201);
    }
}
