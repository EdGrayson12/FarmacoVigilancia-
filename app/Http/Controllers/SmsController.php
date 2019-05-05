<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request){
    	Nexmo::message()->send([
		    'to'   => '524921261352',
		    'from' => 'Nexmo',
		    'text' => $request->mensaje
		]);

		Nexmo::message()->send([
		    'to'   => '524925441331',
		    'from' => 'Nexmo',
		    'text' => $request->mensaje
		]);

		Nexmo::message()->send([
		    'to'   => '524921161319',
		    'from' => 'Nexmo',
		    'text' => $request->mensaje
		]);

		Session::flash('success','Mensaje se envio correctamente');
		return redirect('/sms');
    }

    public function sendSmsOne(Request $request){
    	Nexmo::message()->send([
		    'to'   => '52' . $request->mobile,
		    'from' => 'Nexmo',
		    'text' => $request->mensaje
		]);
		Session::flash('success','Mensaje se envio correctamente');
		return redirect('/sms');
    }
}
