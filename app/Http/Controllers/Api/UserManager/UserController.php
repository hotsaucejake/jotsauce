<?php

namespace App\Http\Controllers\Api\UserManager;

use App\Exceptions\NotImplementedException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Users list
     *
     * @group User Manager
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        throw new NotImplementedException();
    }

    /**
     * Create a new User
     *
     * @group User Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Return specified User
     *
     * @group User Manager
     * @authenticated
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        throw new NotImplementedException();
    }

    /**
     * Update the specified User
     *
     * @group User Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        throw new NotImplementedException();
    }

    /**
     * Remove the specified User
     *
     * @group User Manager
     * @authenticated
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        throw new NotImplementedException();
    }
}
