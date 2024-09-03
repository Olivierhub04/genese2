<?php

namespace App\Http\Controllers;

use App\Models\taches;
use App\Http\Requests\StoretachesRequest;
use App\Http\Requests\UpdatetachesRequest;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.taches.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretachesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(taches $taches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(taches $taches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetachesRequest $request, taches $taches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(taches $taches)
    {
        //
    }
}
