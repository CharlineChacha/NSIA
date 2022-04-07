<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;

class FicheController extends Controller
{
    public function add(Request $request)
    {


       $employe= Employe::find($request->employe);

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
       $phpmailer->Subject = 'Fiche d\'engagement';
       $phpmailer->Body ='
           <p>Nom Employe : '.$employe->nomEmploye.' </p>
           <p>Prenom Employe :'.$employe->prenomEmploye.'</p>
           <p>Poste : '.$employe->poste->nomposte.'</p>
           <p>J\'accepte la prise en charge des depenses</p>
       ';

       if(!$phpmailer->send())
       {

        return back()->with('Fail', 'Fiche non envoyé')->withErrors($phpmailer->ErrorInfo);
       }else{
         return back()->with('message', 'la fiche a été bien envoyée ');

       }
    }
}
