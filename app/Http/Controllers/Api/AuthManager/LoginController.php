<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginAuthRequest;
use App\Http\Resources\NewAccessToken;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Login
     *
     * @group Authentication
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @response {
     *      'accessToken': [
     *          'abilities': ['*'],
     *          'name': 'Personal Access Token'
     *      ],
     *      'plainTextToken': '69|9r1lp8rbNmQ9d7FEHvIM9S34z6S5X0TSEuZgI9aw'
     * }
     */
    public function __invoke(LoginAuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {
            throw ValidationException::withMessages([
                'credentials' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = new NewAccessToken($user->createToken('Personal Access Token'));

        return response()->json($token, 200);
    }
}
