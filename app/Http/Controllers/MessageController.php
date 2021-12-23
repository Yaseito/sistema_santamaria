<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function store()
    {
    	$message = request()->validate([
    		'name'=>'required',
    		'email'=>'required',
    		'subject'=>'required',
    		'content'=>'required|min:3'
    	]);

    	Mail::to('juniorfer_sl@hotmail.com')->queue(new MessageReceived($message));
        //return new MessageReceived($message);

    	return 'Datos validados';
    }


}

