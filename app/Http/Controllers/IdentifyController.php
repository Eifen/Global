<?php

namespace App\Http\Controllers;

use App\Models\Identify;
use App\Http\Requests\StoreIdentifyRequest;
use App\Http\Requests\UpdateIdentifyRequest;
use App\Http\Resources\IdentifyCollection;

class IdentifyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Mostramos los tipos de identificacion
        $identifies = Identify::all();
        return new IdentifyCollection($identifies);
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
    public function store(StoreIdentifyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Identify $identify)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Identify $identify)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIdentifyRequest $request, Identify $identify)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Identify $identify)
    {
        //
    }
}
