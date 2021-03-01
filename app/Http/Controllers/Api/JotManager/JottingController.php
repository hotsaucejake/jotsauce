<?php

namespace App\Http\Controllers\Api\JotManager;

use App\Exceptions\NotImplementedException;
use App\Http\Controllers\Controller;
use App\Models\Jot;
use App\Models\Jotting;
use Illuminate\Http\Request;

class JottingController extends Controller
{
    /**
     * Display a listing of jottings for a jot
     * @todo Create Jottings Resource
     *
     * @group Jot Manager
     * @authenticated
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function index(Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Create a new jotting
     *
     * @group Jot Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Return the specified jotting
     *
     * @group Jot Manager
     * @authenticated
     * @param  \App\Models\Jot  $jot
     * @param  \App\Models\Jotting  $jotting
     * @return \Illuminate\Http\Response
     */
    public function show(Jot $jot, Jotting $jotting)
    {
        throw new NotImplementedException();
    }

    /**
     * Update the specified jotting
     *
     * @group Jot Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jot  $jot
     * @param  \App\Models\Jotting  $jotting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jot $jot, Jotting $jotting)
    {
        throw new NotImplementedException();
    }

    /**
     * Remove the specified jotting
     *
     * @group Jot Manager
     * @authenticated
     * @param  \App\Models\Jot  $jot
     * @param  \App\Models\Jotting  $jotting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jot $jot, Jotting $jotting)
    {
        throw new NotImplementedException();
    }
}
