<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Demande;
use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
    function index(){
         $data = ['LoggedUserInfo'=>Admin::where('id', '=', session('LoggedUser'))->first()];
         $count = DB::table('consommables')->count();
         $user = DB::table('employes')->count();
         $ask = DB::table('demandes')->count();

         $dep = DB::table('departements')->count();



        return view('welcome', $data, compact('count', 'user', 'ask', 'dep'));
    }

     function logout(){
       Session::flush();
       return redirect()->route('auth.login');

     }
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        $request ->validate([
            "nom" =>'required',
            "email"=>'required|email|unique:admins',
            "password"=> 'required',

        ]);
        $admin = new Admin();
        $admin->name = $request->nom;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $save = $admin->save();

        if($save){
            return back()->with('Success', 'Utilisateur ajouté avec succes');
        }else{
            return back()->with('Fail', 'Une erreur sest produite, réessayer encore...');
        }
    }

    function check(Request $request){
        $request ->validate([
            "email"=>'required |email',
            "password"=> 'required',

        ]);
        $admin = Admin::where('email',  $request->email)->where('password',  $request->password)->first();

        if(isset($admin)){
            session([
                'admin'=> $admin

            ]);
            return redirect(route('welcome'))->with('success', 'Connexion reussie');

        }else{
            return back()->with('fail', 'Informations incorrect');

        }

    }


    public function destroy(Admin $admin, $id=null)
    {
        $admin->where(['id'=>$id])->delete();
        return back()->with('flash_message_success', 'consommable supprimé');
    }
}
