<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParticipantExpenseRequest;
use App\Http\Requests\UpdateParticipantExpenseRequest;
use App\Http\Resources\V1\ParticipantExpenseCollection;
use App\Http\Resources\V1\ParticipantExpenceResource;
use App\Models\ParticipantExpense;
use App\Services\ParticipantExpenseQueryBuilder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ParticipantExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = new ParticipantExpenseQueryBuilder();
        $queryItems = $filter->trasform($request);

        if (count($queryItems) === 0) {
            return new ParticipantExpenseCollection(ParticipantExpense::paginate());
        }

        return new ParticipantExpenseCollection(ParticipantExpense::where($queryItems));
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
     * @param  \App\Http\Requests\StoreParticipantExpenseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParticipantExpenseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParticipantExpense  $participantExpense
     * @return \Illuminate\Http\Response
     */
    public function show(ParticipantExpense $participantExpense)
    {
        return new ParticipantExpenceResource($participantExpense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParticipantExpense  $participantExpense
     * @return \Illuminate\Http\Response
     */
    public function edit(ParticipantExpense $participantExpense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantExpenseRequest  $request
     * @param  \App\Models\ParticipantExpense  $participantExpense
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantExpenseRequest $request, ParticipantExpense $participantExpense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParticipantExpense  $participantExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParticipantExpense $participantExpense)
    {
        //
    }
}
