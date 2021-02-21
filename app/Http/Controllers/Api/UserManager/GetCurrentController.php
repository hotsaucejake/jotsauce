<?php

namespace App\Http\Controllers\Api\UserManager;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;

class GetCurrentController extends Controller
{
    /**
     * Current User
     *
     * @group User Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = new UserResource($request->user());

        return response()->json($user, 200);
    }
}
