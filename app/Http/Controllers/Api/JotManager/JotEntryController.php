<?php

namespace App\Http\Controllers\Api\JotManager;

use App\Exceptions\NotImplementedException;
use App\Http\Controllers\Controller;
use App\Models\Jot;
use App\Models\JotEntry;
use Illuminate\Http\Request;

class JotEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @group Jot Manager
     * @authenticated
     * @return \Illuminate\Http\Response
     */
    public function index(Jot $jot)
    {
        $jotEntries = $jot->jotEntries;

        return json_encode($jotEntries->load('jottings.formElementType', 'jottings.jottingable'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @group Jot Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Display the specified resource.
     *
     * @group Jot Manager
     * @authenticated
     * @param  \App\Models\Models\JotEntry  $jotEntry
     * @return \Illuminate\Http\Response
     */
    public function show(Jot $jot, JotEntry $jotEntry)
    {
        throw new NotImplementedException();
    }

    /**
     * Update the specified resource in storage.
     *
     * @group Jot Manager
     * @authenticated
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\JotEntry  $jotEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jot $jot, JotEntry $jotEntry)
    {
        throw new NotImplementedException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @group Jot Manager
     * @authenticated
     * @param  \App\Models\Models\JotEntry  $jotEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jot $jot, JotEntry $jotEntry)
    {
        throw new NotImplementedException();
    }
}
