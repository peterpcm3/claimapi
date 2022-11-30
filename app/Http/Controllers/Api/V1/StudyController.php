<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudyRequest;
use App\Http\Requests\UpdateStudyRequest;
use App\Models\Study;

class StudyController extends Controller
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
     * @param  \App\Http\Requests\StoreStudyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudyRequest  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudyRequest $request, Study $study)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        //
    }
}
