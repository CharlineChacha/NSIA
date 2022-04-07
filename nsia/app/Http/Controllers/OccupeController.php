<?php

namespace App\Http\Controllers;

use App\Models\Occupe;
use Illuminate\Http\Request;

class OccupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('occupe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('occupe.create');
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
     * @param  \App\Models\Occupe  $occupe
     * @return \Illuminate\Http\Response
     */
    public function show(Occupe $occupe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupe  $occupe
     * @return \Illuminate\Http\Response
     */
    public function edit(Occupe $occupe)
    {
        return view ('occupe.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Occupe  $occupe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Occupe $occupe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupe  $occupe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupe $occupe)
    {
        //
    }
}
