<?php

namespace App\Http\Controllers;
use App\Models\Poste;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LayoutempController extends Controller
{
    function index(){
        $postes = Poste::all();
        $employes = Employe::all();
        return view('layoutemp.index', compact('employes', 'postes'));
    }

     function logoutemp(){
       Session::flush();
       return redirect()->route('acces.loginemp');

     }
    function loginemp(){
        return view('acces.loginemp');
    }
    function registeremp(){
        return view('acces.registeremp');
    }

    function saveemp(Request $request){
        $request ->validate([
            "nom" =>'required',
            "mail"=>'required|email|unique:employes',
            "pass"=> 'required',

        ]);
        $employe = new Employe();
        $employe->nomEmploye = $request->nom;
        $employe->mailEmploye = $request->mail;
        $employe->password = $request->pass;
        $save = $employe->save();

        if($save){
            return back()->with('Success', 'Utilisateur ajouté avec succes');
        }else{
            return back()->with('Fail', 'Une erreur sest produite, réessayer encore...');
        }
    }

    function checkemp(Request $request){
        $request ->validate([
            "mail"=>'required ',
            "pass"=> 'required',


        ]);
        $employe = Employe::where('mailEmploye',  $request->mail)->where('password',  $request->pass)->first();


        if(isset($employe)){
            session([
                'employe'=> $employe

            ]);
            return redirect()->route('layoutemp')->with('success', 'Connexion reussie');

        }else{
            return back()->with('fail', 'Informations incorrect');

        }

    }

}
