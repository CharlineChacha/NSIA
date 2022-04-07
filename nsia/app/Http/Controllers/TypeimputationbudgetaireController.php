<?php

namespace App\Http\Controllers;

use App\Models\Typeimputationbugetaire;
use Illuminate\Http\Request;

class TypeimputationbudgetaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('typeimputationbudgetaire.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('typeimputationbudgetaire.create');
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
     * @param  \App\Models\Typeimputationbugetaire  $typeimputationbugetaire
     * @return \Illuminate\Http\Response
     */
    public function show(Typeimputationbugetaire $typeimputationbugetaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typeimputationbugetaire  $typeimputationbugetaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Typeimputationbugetaire $typeimputationbugetaire)
    {
        return view ('typeimputationbudgetaire.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Typeimputationbugetaire  $typeimputationbugetaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typeimputationbugetaire $typeimputationbugetaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typeimputationbugetaire  $typeimputationbugetaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typeimputationbugetaire $typeimputationbugetaire)
    {
        //
    }
}
