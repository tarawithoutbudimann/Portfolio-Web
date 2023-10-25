<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail; // 

class SendEmailController extends Controller
{
    public function index()
    {
        $content = [
            'subject' => 'This is the mail subject',
            'name' => 'tarawithoutbudiman',
            'body' => 'This is the email body of how to send email from Laravel with Mailtrap.'
        ];

        Mail::to('tamarasashikirana@gmail.com')->send(new SendEmail($content)); 
        return "Email berhasil dikirim.";
    }
}