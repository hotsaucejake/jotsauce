<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterAuthRequest;
use App\Http\Resources\User as UserResource;
use App\User;

class RegisterController extends Controller
{
    /**
     * Register
     *
     * Before submitting a Register request, you may use the
     * Email Availability and Username Availability endpoints
     * to determine if they're already in use
     *
     * @group Authentication
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterAuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'username' => $validated['username'],
            'email'    => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json(new UserResource($user), 201);
    }
}
