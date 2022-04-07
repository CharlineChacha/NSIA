<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use App\Models\Service;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services  = Service::with('poste')->orderBy('id','ASC');
        $postes = Poste::All();
        return view('poste.index', compact('postes', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::All();
        $postes= Poste::all();
        return view('poste.create', compact('postes', 'services'));
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
            'nom'=> 'required',
            'nomsev' => 'required|exists:services,id',
            'nomuser'=> 'required',
            'debut'=> 'required',
            'fin'=> 'required'

        ]);


        $poste = new Poste();

         $poste->service_id = $request->nomsev;
         $poste->nomposte = $request->nom;
         $poste->nomuserposte = $request->nomuser;
         $poste->datedebut = $request->debut;
         $poste->datefin = $request->fin;

        $poste->save();
        return redirect()->route('poste.index')->with('message', 'Le poste a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function show(Poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function edit($poste)
    {
        $poste = Poste::find($poste);
        $services = Service::all();
        return view('poste.edit', compact('poste','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $poste)
    {
        $request->validate([
            'nom'=> 'required',
            'nomsev' => 'required|exists:services,id',
            'nomuser'=>'required',
            'debut'=> 'required',
            'fin'=> 'required'
        ]);
        $poste = Poste::find($poste);

        $poste->service_id = $request->nomsev;
        $poste->nomposte = $request->nom;
        $poste->nomuserposte = $request->nomuser;
        $poste->datedebut = $request->debut;
        $poste->datefin = $request->fin;


       $poste->save();

        return redirect()->route('poste.index')->with('message', 'Le poste a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poste  $poste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poste $poste)
    {
        $poste->delete();
        return back();
    }
}
