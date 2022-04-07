<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Employe;
use App\Models\Consommable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
//use Illuminate\Notifications\Notification;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Mail;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;



class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employes  = Employe::with('demande')->orderBy('id','ASC');
         $consommables  = Consommable::with('demande')->orderBy('id','ASC');
         $demandes = Demande::All();
         $ask = DB::table('demandes')->count();

         return view('demande.index', compact('demandes' ,'ask','employes',  'consommables'));

    }
   /*  public function sendMyData()
    {
        $data = ['name'=>'demande', 'data'=>'sujet'];
         $user ['to']='daocharlotte138@gmail.com';
         Mail::send('demande.c', $data, function ($message) use ($user){
            // $message->from('john@johndoe.com', 'John Doe');
           //  $message->sender('john@johndoe.com', 'John Doe');
             $message->to('daocharlotte138@gmail.com', 'John Doe');
             $message->cc('daocharlotte138@gmail.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
             $message->replyTo('john@johndoe.com', 'John Doe');
             $message->subject('Subject');
             $message->priority(3);
             $message->attach('pathToFile');
         });
    } */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employes = Employe::All();
        $consommables = Consommable::all();
        $demandes = Demande::all();
        return view('demande.create', compact('demandes' ,'employes','consommables'));
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
            //'prenom'=> 'required|exists:employes,id',
            'consommable'=> 'required|exists:consommables,id',
            'detail'=> 'required|max:255',
            'case'=> 'required|max:255',
           // 'date' => 'required|max:255',
            'supp' => 'required|max:255',

        ]);

        $demande = new Demande();
      //  $demande= Demande::find($request->demande);

         $demande->employe_id = $request->nom;
        // $demande->employe_id = $request->prenom;
         $demande->consommable_id = $request->consommable;
         $demande->details = $request->detail;
         $demande->choix = $request->case;
        // $demande->dateDemande = $request->date;
         $demande->supplementaire = $request->supp;

        $demande->save();


        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'b9d9030e7bf4f0';
        $phpmailer->Password = 'fe84dfc1939e63';


        $phpmailer->setFrom('nsiagroup@gmail.com', 'NSIA GROUP');
        $phpmailer->addAddress('daocharlotte138@gmail.com');     //Add a recipient
        $phpmailer->addReplyTo('daocharlotte138@gmail.com', 'Information');



        $phpmailer->isHTML(true);
        $phpmailer->Subject = 'Demande de consommables informatiques ou bureautiques';
        $phpmailer->Body =
         '<p>Nom Employe : '.$demande->employe->nomEmploye.' </p>
        <p>Prenom Employe :'.$demande->employe->prenomEmploye.'</p>
        <p>Consommable : '.$demande->consommable->nomConsommable.'</p>
        <p>Details sur le consommable : '.$demande->details.'</p>
        <p>Motif de demande : '.$demande->choix.'</p>
        <p>Details supplementaires : '.$demande->supplementaire.'</p>




    ';

        if(!$phpmailer->send())
        {
            return back()->with('Fail', 'Email non envoyé')->withErrors($phpmailer->ErrorInfo);
        }else{
            return back()->with('message', 'la demande a été ajouté avec succès. Une réponse vous sera donné dans 24h');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {

        $employes = Employe::all();
        $consommables = Consommable::all();
        return view('demande.edit', compact('demande', 'employes', 'consommables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande $demande)
    {
        $request->validate([
            'nom'=> 'required|exists:employes,id',
          //  'prenom'=> 'required|exists:employes,id',
            'consommable'=> 'required|exists:consommables,id',
            'detail'=> 'required|max:255',
            'case'=> 'required|max:255',
            //'date' => 'required|max:255',

        ]);

        $demande = new Demande();
        $demande = Demande::find($demande);
         $demande->employe_id = $request->nom;
         //$demande->employe_id = $request->prenom;
         $demande->consommable_id = $request->consommable;
         $demande->details = $request->detail;
         $demande->choix = $request->case;
       //  $demande->dateDemande = $request->date;

         $phpmailer = new PHPMailer();
         $phpmailer->isSMTP();
         $phpmailer->Host = 'smtp.mailtrap.io';
         $phpmailer->SMTPAuth = true;
         $phpmailer->Port = 2525;
         $phpmailer->Username = 'b9d9030e7bf4f0';
         $phpmailer->Password = 'fe84dfc1939e63';


         $phpmailer->setFrom('nsiagroup@gmail.com', 'NSIA GROUP');
        $phpmailer->addAddress('daochachou140@gmail.com');     //Add a recipient
        $phpmailer->addReplyTo('daochachou140@gmail.com', 'Information');



        $phpmailer->isHTML(true);
        $phpmailer->Subject = 'Demande de consommables informatiques ou bureautiques';
        $phpmailer->Body =
         '<p> Demande validée </p>
    ';

        if(!$phpmailer->send())
        {

          return back()->with('Fail', 'Email non envoyé')->withErrors($phpmailer->ErrorInfo);
        }else{

          return back()->with('message', 'Demande validée.');
        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        $demande->delete();
        return back();
    }
}
