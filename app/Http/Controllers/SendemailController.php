<?php

namespace App\Http\Controllers;

use App\Mail\Sendemail;
use Illuminate\Support\Facades\Mail;

class SendemailController extends Controller
{
    //
    public function SendEmail()
    {
        $name=$_POST['txtName'];
        $semail=$_POST['txtEmail'];
        $contact=$_POST['txtPhone'];
        $msg=$_POST['txtMsg'];
        Mail::to('niharkumarshah11@gmail.com')->send(new Sendemail($name,$semail,$contact,$msg));
        return view('home');
    }
}
