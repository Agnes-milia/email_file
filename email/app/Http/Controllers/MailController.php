<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
   {
       $mailData = [
           'title' => 'More mails from testemil9779@gmail.com',
           'body' => 'This is for testing email using smtp.'
       ];
       
       /* Mail::to('tesztbibanka@gmail.com')
        ->send(new DemoMail($mailData)); */

        foreach (['foloslegesideirni@gmail.com', 'kissadam990202@gmail.com', 'tesztmarci96@gmail.com', 'patrikhamar460@gmail.com'] as $recipient)
        {
            Mail::to($recipient)
            ->send(new DemoMail($mailData));
        }

       dd("Email is sent successfully.");
   }

}
