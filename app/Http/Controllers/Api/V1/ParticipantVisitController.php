<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreParticipantVisitRequest;
use App\Http\Requests\UpdateParticipantVisitRequest;
use App\Models\ParticipantVisit;

class ParticipantVisitController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParticipantVisitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantVisitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantVisit  $participantVisit
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantVisit $participantVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantVisit  $participantVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantVisit $participantVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantVisitRequest  $request
     * @param  \App\Models\ParticipantVisit  $participantVisit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantVisitRequest $request, ParticipantVisit $participantVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantVisit  $participantVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantVisit $participantVisit)
    {
        //
    }
}
