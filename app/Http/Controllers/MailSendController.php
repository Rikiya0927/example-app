<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailSendController extends Controller
{
    public function index(){

    	$data = [];

    	Mail::send('emails.welcome', $data, function($message){
    	    $message->to('rikiya11040927@gmail.com', 'Test')
    	    ->subject('This is a test mail');
    	});
    }

}
