<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Consommable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsommableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('consommable.index');
        $consommables  = Consommable::with('categorie')->orderBy('id','ASC')->paginate(15);
        $categories = Categorie::All();
        return view('consommable.index', compact('consommables', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::All();
        return view('consommable.create', compact('categories'));
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
            'nom'=> 'required|unique:consommables,nomConsommable|max:255',
            'categorie' => 'required|exists:categories,id'

        ]);

        $consommable = new Consommable();

         $consommable->categorie_id = $request->categorie;
         $consommable->nomConsommable = $request->nom;
         $consommable->save();
       return redirect()->route('consommable.index')->with('message', 'Le consommable a été ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consommable  $consommable
     * @return \Illuminate\Http\Response
     */
    public function show(Consommable $consommable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consommable  $consommable
     * @return \Illuminate\Http\Response
     */
    public function edit(Consommable $consommable)
    {
        return view('consommable.edit', compact('consommable'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consommable  $consommable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consommable $consommable)
    {
        $validate =  $request->validate([
            'nomConsommable'=> 'required',
            'nomCategorie'=>'required'
        ]);
        $consommable->update($validate);
        return redirect()->route('consommable.index')->with('message', 'Le consommable a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consommable  $consommable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consommable $consommable)
    {
        $consommable->delete();
        return back();
    }
}
