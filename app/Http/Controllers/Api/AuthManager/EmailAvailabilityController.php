<?php

namespace App\Http\Controllers\Api\AuthManager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailAvailabilityRequest;

class EmailAvailabilityController extends Controller
{
    /**
     * Email Availability
     *
     * @group Authentication
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(EmailAvailabilityRequest $request)
    {
        $validated = $request->validated();

        return response()->json((bool) $validated, 200);
    }
}
