<?php

namespace App\Http\Controllers;

use App\Models\dossier;
use App\Http\Requests\StoredossierRequest;
use App\Http\Requests\UpdatedossierRequest;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoredossierRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dossier $dossier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dossier $dossier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedossierRequest $request, dossier $dossier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dossier $dossier)
    {
        //
    }
}
