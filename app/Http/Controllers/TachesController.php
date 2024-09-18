<?php

namespace App\Http\Controllers;

use App\Models\taches;
use App\Http\Requests\StoretachesRequest;
use App\Http\Requests\UpdatetachesRequest;
use Illuminate\Support\Facades\Auth;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = taches::all();
        return view('clients.taches.index',['taches' => $taches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.taches.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretachesRequest $request)
    {
        $taches = taches::create([
            'titre' => $request->titre,
            'user_id' => Auth::user()->id,
            'statut' => "en cours",
            ]);
        return redirect(route('clients.taches.index'));
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
        $taches = $taches;
        return view('clients.taches.create',['taches' => $taches]);
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
