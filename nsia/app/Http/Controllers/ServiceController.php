<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $departements  = Departement::with('service')->orderBy('id','ASC');
         $services = Service::All();
         return view('service.index', compact('services', 'departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::All();
        $departements= Departement::all();
        return view('service.create', compact('services', 'departements'));
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
            'nomdep' => 'required|exists:departements,id',
            'nomchef'=> 'required',

        ]);


        $service = new Service();

         $service->nomservice = $request->nom;
         $service->departement_id = $request->nomdep;
         $service->nomchefservice = $request->nomchef;

        $service->save();
        return redirect()->route('service.index')->with('message', 'Le service a été ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($service)
    {
        $service = Service::find($service);
        $departements = Departement::all();
        return view('service.edit', compact('service','departements'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $service)
    {

         $request->validate([
            'nom'=> 'required',
            'nomdep'=>'required',
            'nomchef'=>'required'
        ]);
        $service = Service::find($service);
        $service->nomservice= $request->nom;
        $service->departement_id = $request->nomdep;
        $service->nomchefservice= $request->nomchef;
        $service->save();


        return redirect()->route('service.index')->with('message', 'Le service a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return back();
    }
}
