<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Poste;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $postes  = Poste::with('employe')->orderBy('id','ASC');
         $employes = Employe::All();
         return view('employe.index', compact('employes',  'postes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = Employe::All();
        $postes = Poste::all();
        return view('employe.create', compact('employes','postes'));
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
            'prenom'=> 'required',
            'mail'=> 'required|max:255',
            'pass'=> 'required',
            'num'=> 'required',
            'image'=> 'required|file|mimes:png,jpg,jpeg',
            'poste' => 'required|exists:postes,id',


        ]);

        $image= $request->image->store('employe', 'public');
        $employe = new Employe();

         $employe->nomEmploye = $request->nom;
         $employe->prenomEmploye = $request->prenom;
         $employe->mailEmploye = $request->mail;
         $employe->password = $request->pass;
         $employe->numeroTelinterne = $request->num;
         $employe->photoEmploye = $image;
         $employe->poste_id = $request->poste;

        $employe->save();
        return redirect()->route('employe.index')->with('message', 'Lemploye a été ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show( $employe)
    {
       $employe = Employe::find($employe);
        $postes = Poste::all();
        
        return view('employe.show',compact('postes', 'employe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit($employe)
    {
        $employe = Employe::find($employe);
        $postes = Poste::all();
        return view('employe.edit', compact('employe', 'postes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employe)
    {
        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'mail'=> 'required',
            'pass'=> 'required',
            'num'=> 'required',
            'image'=> 'required|file|mimes:png,jpg,jpeg',
            'poste' => 'required|exists:postes,id',


        ]);

        $image= $request->image->store('employe', 'public');
        $employe = new Employe();

         $employe = Employe::find($employe);
         $employe->nomEmploye = $request->nom;
         $employe->prenomEmploye = $request->prenom;
         $employe->mailEmploye = $request->mail;
         $employe->password = $request->pass;
         $employe->numeroTelinterne = $request->num;
         $employe->photoEmploye = $image;
         $employe->poste_id = $request->poste;

        $employe->save();
        return redirect()->route('employe.index')->with('message', 'Lemploye a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy( Employe $employe)
    {
        $employe->delete();
        return back();
    }
}
