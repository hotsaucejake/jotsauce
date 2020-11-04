<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UsernameAvailabilityRequest;

class UsernameAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UsernameAvailabilityRequest $request)
    {
        $validated = $request->validated();

        return response()->json((bool) $validated, 200);
    }
}
