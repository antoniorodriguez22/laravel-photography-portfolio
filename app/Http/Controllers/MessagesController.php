<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use App\ContactUS;

class MessagesController extends Controller
{
    public function store(Request $request)
    {


      $msg = request()->validate([
        'name'=>'required',
        'emailAddress'=>'required|email',
        'comment'=>'required'
      ]);

      // if(ContactUS::)

       ContactUS::create($request->all());

      \Mail::to('keylerruizphotography@gmail.com')->queue(new MessageReceived($msg));

      return  redirect()->back()->with('message', '¡Su mensaje fue enviado con éxito!');
    }
}
