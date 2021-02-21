<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    /**
     * Logout
     *
     * @group Authentication
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([], 200);
    }
}
