<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   public function homepage() {
    return view('welcome');
}
 public function contact_us(){
        return view('contact-us');
    }

    public function data(Request $request){
        $name=$request->name;
        $email=$request->email;
        $text_message=$request->text_message;


    Mail::to($email)->send(new ContactMail($name, $text_message));

        return redirect(route('homepage'))->with('status', 'Hai inviato la tua email ');
    }
}
