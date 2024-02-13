<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable\Address;

class MailController extends Controller
{
    public function sendContact(Request $request){
        

        $data = $request->all();

        if($data['email'] ==''){

            return redirect()->route('contatti')->with('error','i campi inseriti non possono essere vuoti');
        }
        
        Mail::to('diego@gmail.com')->send(new ContactMail($data['name'],$data['email'],$data['description'],$data['address']));
       
        $data = $request->all();

        return redirect()->route('contatti')->with('success','il form è stato inviato correttamente');

    }
}
