<?php

namespace App\Http\Controllers;

use App\Models\Imputationbudgetaire;
use Illuminate\Http\Request;

class ImputationbudgetaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('imputationbudgetaire.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('imputationbudgetaire.create');
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
     * @param  \App\Models\Imputationbudgetaire  $imputationbudgetaire
     * @return \Illuminate\Http\Response
     */
    public function show(Imputationbudgetaire $imputationbudgetaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imputationbudgetaire  $imputationbudgetaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Imputationbudgetaire $imputationbudgetaire)
    {
        return view ('imputationbudgetaire.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imputationbudgetaire  $imputationbudgetaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imputationbudgetaire $imputationbudgetaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imputationbudgetaire  $imputationbudgetaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imputationbudgetaire $imputationbudgetaire)
    {
        //
    }
}
