<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    { 
        $MailData = [
            'title' => 'Mail from Laravel 10',
            'body' => 'This is for testing email using smtp'
        ];

        Mail::to('roobon@gmail.com')->send(new DemoMail($MailData));
        // return "Email sent successfully!";
        dd("Email sent successfully!");
    }
}
