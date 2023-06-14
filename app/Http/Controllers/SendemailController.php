<?php

namespace App\Http\Controllers;

use App\Mail\Sendemail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class SendemailController extends Controller
{
    public function SendEmail(Request $request)
    {
        
        $name=$_POST['txtName'];
        $semail=$_POST['txtEmail'];
        $contact=$_POST['txtPhone'];
        $msg=$_POST['txtMsg'];
       
        $request->validate(
            [
                'txtName'=>'required',
                'txtEmail'=>'regex:/(.+)@(.+)\.(.+)/i',
                'txtPhone'=>'required|numeric',
                'txtMsg'=>'required',
            ],
            [
                'txtName.required'=>'Please Enter Your Name.',
                'txtEmail.regex'=>'Please Enter Your Valid Email.',
                'txtPhone.required'=>'Please Enter Your Contact Number.',
                'txtPhone.numeric'=>'Please Enter Numbers Only.',
                'txtPhone.max'=>'Please Valid Phone Number',
                'txtMsg.required'=>'Please Enter Your Message Here.',   
            ]
        );

        if (isset($_POST['btnSubmit'])) {
            Mail::to('niharkumarshah11@gmail.com')->send(new Sendemail($name,$semail,$contact,$msg));
            return view('home');    
        }
    }
}
