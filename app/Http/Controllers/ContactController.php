<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function contact(){

        return view('contatti');

    }


    public function newContact(Request $request){

        $nome = $request->input('name');

        $richiesta = $request->input('request');





   $contactMail = new ContactMail($nome, $richiesta);



        Mail::to('lollo@lollo.it')->send($contactMail);

return redirect()->route('home')->with('massage','La mail è stata inviata con successo');



}
}
