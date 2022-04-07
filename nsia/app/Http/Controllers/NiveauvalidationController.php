<?php

namespace App\Http\Controllers;

use App\Models\Niveauvalidation;
use Illuminate\Http\Request;

class NiveauvalidationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('niveauvalidation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('niveauvalidation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Niveauvalidation  $niveauvalidation
     * @return \Illuminate\Http\Response
     */
    public function show(Niveauvalidation $niveauvalidation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Niveauvalidation  $niveauvalidation
     * @return \Illuminate\Http\Response
     */
    public function edit(Niveauvalidation $niveauvalidation)
    {
        return view ('niveauvalidation.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Niveauvalidation  $niveauvalidation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Niveauvalidation $niveauvalidation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Niveauvalidation  $niveauvalidation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Niveauvalidation $niveauvalidation)
    {
        //
    }
}
