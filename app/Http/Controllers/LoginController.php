<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Validator;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

     function CheckLogin(Request $request)
    {
        $test_case=null;
        $check_student = Student::where('Apogee',$request->Apogee)->where('CIN',$request->CIN)->where('Email',$request->Email)->get();
        if(!($check_student->isEmpty())){
            return redirect('home');
        }else
        {
            $test_case ='1';
            return view('index',['test_case'=>$test_case]);
        }
    
    }
       /* $validated = $request->validate([
            'Apogee'    =>      'required|min:8',
            'CIN'       =>      'required|min:10',
            'Email'     =>      'required'
        ]);

        $user_data =  array(
            'Apogee'    =>   $request -> get('Apogee')  ,
            'CIN'       =>   $request -> get('CIN')  ,
            'Email'     =>   $request -> get('Email')   
        );

        if(Auth::attempt($user_data))
        {
             return redirect('index');
        }
        else
        {
             return redirect('home');
        }
    }*/


}
