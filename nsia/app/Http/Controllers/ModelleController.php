<?php

namespace App\Http\Controllers;

use App\Models\Consommable;
use App\Models\Modelle;
use Illuminate\Http\Request;

class ModelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modelles  = Modelle::with('consommable')->orderBy('id','ASC')->paginate(15);
        $consommables = Consommable::All();
        return view('modelle.index', compact('modelles', 'consommables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consommables = Consommable::All();
        $modelle = Modelle:: all();
        return view('modelle.create', compact('consommables', 'modelle'));
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
          'detail' => 'required',
          'reference' =>'required'

        ]);

        $modelle = new Modelle();

         $modelle->consommable_id = $request->consommable;
         $modelle->detailModel = $request->detail;
         $modelle->referenceModel = $request->reference;
         $modelle->save();
       return redirect()->route('modelle.index')->with('message', 'Le model a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modelle  $modelle
     * @return \Illuminate\Http\Response
     */
    public function show(Modelle $modelle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modelle  $modelle
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelle $modelle)
    {
        $consommables = Consommable::All();
        $modelle = Modelle:: all();
        return view ('modelle.edit', compact('modelle', 'consommables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modelle  $modelle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelle $modelle)
    {
        $validate =  $request->validate([
            'consommable'=> 'required|exists:consommables,id',
            'detail'=>'required',
            'reference' => 'required'
        ]);
        $modelle = Modelle::find($modelle);
        $modelle->update($validate);
        return redirect()->route('modelle.index')->with('message', 'Le model a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modelle  $modelle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelle $modelle)
    {
        $modelle->delete();
        return back();
    }
}
