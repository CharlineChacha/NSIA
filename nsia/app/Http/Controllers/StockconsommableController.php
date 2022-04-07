<?php

namespace App\Http\Controllers;

use App\Models\Consommable;
use App\Models\Stockconsommable;
use Illuminate\Http\Request;

class StockconsommableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stockconsommables  = Stockconsommable::with('consommable')->orderBy('id','ASC')->paginate(15);
        $consommables = Consommable::All();
        return view('stockconsommable.index', compact('stockconsommables', 'consommables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consommables = Consommable::All();
        return view('stockconsommable.create', compact('consommables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'consommable' => 'required|exists:consommables,id',
            'date'=> 'required',
            'quantite' => 'required'
        ]);

         $stockconsommable = new Stockconsommable();

         $stockconsommable->consommable_id = $request->consommable;
         $stockconsommable->quantite = $request->quantite;
         $stockconsommable->dateEntree = $request->date;

         $stockconsommable->save();
       return redirect()->route('stockconsommable.index')->with('message', 'Le stock a été ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stockconsommable  $stockconsommable
     * @return \Illuminate\Http\Response
     */
    public function show(Stockconsommable $stockconsommable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stockconsommable  $stockconsommable
     * @return \Illuminate\Http\Response
     */
    public function edit(Stockconsommable $stockconsommable)
    {
        $stockconsommables = Stockconsommable::all();
        $consommables = Consommable::all();
        return view ('stockconsommable.edit', compact('stockconsommable', 'consommables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stockconsommable  $stockconsommable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stockconsommable $stockconsommable)
    {
         $request->validate([
            'consommable'=> 'required|exists:consommables,id',
            'quantite'=>'required|max:255',
            'date' => 'required|max:255'
        ]);
        $stockconsommable = Stockconsommable::find($stockconsommable);

        $stockconsommable = new Stockconsommable();

        $stockconsommable->consommable_id = $request->consommable;
        $stockconsommable->quantite = $request->quantite;
        $stockconsommable->dateEntree = $request->date;

        $stockconsommable->save();
        return redirect()->route('stockconsommable.index')->with('message', 'Le stock a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stockconsommable  $stockconsommable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stockconsommable $stockconsommable)
    {
        $stockconsommable->delete();
        return back();
    }
}
