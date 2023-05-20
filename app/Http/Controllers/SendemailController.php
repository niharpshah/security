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
                // KEY should be the name of your Textbox
                'txtName'=>'required',
                'txtEmail'=>'required|email',
                'txtPhone'=>'required|numeric',
                'txtMsg'=>'required',
            ]
        );

        if (isset($_POST['btnSubmit'])) {
            Mail::to('niharkumarshah11@gmail.com')->send(new Sendemail($name,$semail,$contact,$msg));
            return view('home');    
        }
    }
}
