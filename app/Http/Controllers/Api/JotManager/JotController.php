<?php

namespace App\Http\Controllers\Api\JotManager;

use App\Exceptions\NotImplementedException;
use App\Http\Controllers\Controller;
use App\Http\Resources\Jot as JotResource;
use App\Models\Jot;
use Illuminate\Http\Request;

class JotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $jots = JotResource::collection($user->jots);
        
        return $jots;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        throw new NotImplementedException();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function show(Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function edit(Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jot $jot)
    {
        throw new NotImplementedException();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jot  $jot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jot $jot)
    {
        throw new NotImplementedException();
    }
}
