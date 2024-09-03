<?php

namespace App\Http\Controllers;

use App\Models\etiquettes;
use App\Http\Requests\StoreetiquettesRequest;
use App\Http\Requests\UpdateetiquettesRequest;

class EtiquettesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.etiquettes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.etiquettes.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreetiquettesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(etiquettes $etiquettes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etiquettes $etiquettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateetiquettesRequest $request, etiquettes $etiquettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etiquettes $etiquettes)
    {
        //
    }
}
