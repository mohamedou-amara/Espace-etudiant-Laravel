<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Student;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function CheckLogin(Request $request)
    {
        $var_test =null;
        $test_case=null;
        $check_student = Student::where('Apogee',$request->Apogee)->where('CIN',$request->CIN)->where('Email',$request->Email)->first();

        if(!($check_student == null)){
            $apogee = $request->Apogee;
            $nom_etu = $check_student ['Nom'];
            $prenom = $check_student ['Prenom'];
            $tele = $check_student ['Telephone'];
            return view('home',['nom_etu'=>$nom_etu,'prenom'=>$prenom,'tele'=>$tele]);
        }
        else
        {

            $test_case ='1';
            return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
        }
    
    }

    function Checkdata(Request $request)
    {

       $test_case=null;
       $var_test = null ;
       $etudiant = Student::where('Nom',$request->first_name)->where('Prenom',$request->last_name)->where('Telephone',$request->phone)->first();
       $check_demande =  Demande::where('apogée',$etudiant['Apogee'])->where('type',$request->selection)->first();
       
       if($check_demande == null)
       {
       $var_test = 2;
       $demande = new Demande;
       $demande->type=$request->selection;
       $demande->apogée=$etudiant['Apogee'];
       $demande->etat ="Non traité";
       $demande->save();

       return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
       }
       else
       {
        $var_test =1;
       return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
       }
    }
    
    public function home()
    {
        $test_case=null;
        $var_test =null;
        return view('welcome',['test_case'=>$test_case,'var_test'=>$var_test]);
    }

    public function demande()
    {
        return view('home');
    }


}
