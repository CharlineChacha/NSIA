<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\validateur;
use Illuminate\Http\Request;

class ValidateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes  = Employe::with('validateur')->orderBy('id','ASC');
        $validateurs = validateur::All();
        return view('validateur.index', compact('validateurs',  'employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = Employe::All();
        $validateurs = Validateur::all();
        return view('validateur.create', compact('validateurs' ,'employes'));
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
            'nom'=> 'required|exists:employes,id',
            'niveau' => 'required|max:255',

        ]);

        $validateur = new Validateur();

         $validateur->employe_id = $request->nom;
        $validateur->niveau = $request->niveau;


        $validateur->save();
        return redirect()->route('validation.index')->with('message', 'la validation a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\validateur  $validateur
     * @return \Illuminate\Http\Response
     */
    public function show(validateur $validateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\validateur  $validateur
     * @return \Illuminate\Http\Response
     */
    public function edit(validateur $validateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\validateur  $validateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, validateur $validateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\validateur  $validateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(validateur $validateur)
    {
        $validateur->delete();
        return back();
    }
}
