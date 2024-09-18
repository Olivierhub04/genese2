<?php

namespace App\Http\Controllers;

use App\Models\fichiers;
use App\Http\Requests\StorefichiersRequest;
use App\Http\Requests\UpdatefichiersRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FichiersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fichiers = Fichiers::all();
        return view('clients.fichiers.fichiers',['fichiers' => $fichiers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.fichiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefichiersRequest $request)
    {
        $path = $request->file('fichiers')->store('fichiers');
        $user = Auth::user()->name;
        $fichiers = Fichiers::create([
            'description' => $request->description,
            'pars' => $user,
            'fichiers' => $path,
        ]);
        return redirect(route('fichiers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(fichiers $fichiers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fichiers $fichiers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefichiersRequest $request, fichiers $fichiers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fichiers $fichiers)
    {
        //
    }
}
