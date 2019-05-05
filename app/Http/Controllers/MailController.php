<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\MessageReceived;

class MailController extends Controller
{
	public function sendMail(Request $request){
		Mail::to($request->correo)->send(new MessageReceived($request->mensaje,$request->asunto));
    	Session::flash('success','El correo se envio correctamente');
		return redirect('/correo');
	}

}
