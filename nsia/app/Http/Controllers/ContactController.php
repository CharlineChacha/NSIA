<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Fournisseur;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts  = Contact::with('fournisseur')->orderBy('id','ASC')->paginate(15);
        $fournisseurs = Fournisseur::All();
        return view('contact.index', compact('contacts', 'fournisseurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fournisseurs = Fournisseur::All();
        return view('contact.create', compact('fournisseurs'));
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
            'fournisseur'=> 'required|exists:fournisseurs,id',
            'contact' => 'required'

        ]);

        $contact = new Contact();

         $contact->fournisseur_id = $request->fournisseur;
         $contact->numeroTel = $request->contact;
         $contact->save();
       return redirect()->route('contact.index')->with('message', 'Le contact a été ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $contact = Contact::find($contact);
        $fournisseurs = Fournisseur::all();
        return view('contact.edit', compact('contact', 'fournisseurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $validate =  $request->validate([
            'fournisseur'=> 'required|exists:fournisseurs,id',
            'contact'=>'required'
        ]);
        $contact->update($validate);
        return redirect()->route('contact.index')->with('message', 'Le contact a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back();
    }
}
