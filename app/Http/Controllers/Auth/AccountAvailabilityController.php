<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailAvailabilityRequest;
use App\Http\Requests\Auth\UsernameAvailabilityRequest;
use Illuminate\Http\Request;

class AccountAvailabilityController extends Controller
{
    public function usernameAvailability(UsernameAvailabilityRequest $request)
    {
        $validated = $request->validated();

        return response()->json(true, 200);
    }


    public function emailAvailability(EmailAvailabilityRequest $request)
    {
        $validated = $request->validated();

        return response()->json(true, 200);
    }
}
