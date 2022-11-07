<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\toMe;
use App\Mail\toUser;

class MailSender extends Controller
{
    public function send(Request $request){
        $invest = intval(substr($request->invest, 1));
        $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);

        if($invest >= 100000 && $request->name != "" && filter_var($email, FILTER_VALIDATE_EMAIL)){
            Mail::to(env("MAIL_USERNAME"), env("MAIL_NAME"))->send(new toMe($request->email, $request->name, $request->invest));
            Mail::to($request->email, env("MAIL_NAME"))->send(new toUser(env("MAIL_USERNAME"), $request->name, $request->invest));

            return view('success');
        }else{
            return view('fail');
        }
    }
}
