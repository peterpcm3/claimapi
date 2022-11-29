<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantDetailRequest;
use App\Http\Requests\UpdateParticipantDetailRequest;
use App\Models\ParticipantDetail;

class ParticipantDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Insert
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParticipantDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantDetail  $participantDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantDetail $participantDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantDetail  $participantDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantDetail $participantDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantDetailRequest  $request
     * @param  \App\Models\ParticipantDetail  $participantDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantDetailRequest $request, ParticipantDetail $participantDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantDetail  $participantDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantDetail $participantDetail)
    {
        //
    }
}
