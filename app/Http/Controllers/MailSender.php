<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\toMe;
use App\Mail\toUser;

class MailSender extends Controller
{
    private $email = 'lllcilician@gmail.com';

    public function send(Request $request){
        // name email invest
        $invest = intval(substr($request->invest, 1));
        $email = filter_var($request->email, FILTER_SANITIZE_EMAIL);

        if($invest >= 100000 && $request->name != "" && filter_var($email, FILTER_VALIDATE_EMAIL)){
            Mail::to($this->email)->send(new toMe($request->email, $request->name, $request->invest));
            Mail::to($request->email)->send(new toUser($this->email, $request->name, $request->invest));

            return view('success');
        }else{
            return view('fail');
        }
    }
}
