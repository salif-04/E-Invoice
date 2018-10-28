<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send(){
        Mail::send('dashboard' , ['name' , 'Alucard'] , function($message){
            $message->to('kiodeba11@gmail.com' , 'To Customer')->subject('Test Email');
            $message->attach('/home/zanark/CODING/GitHub/E-Invoice/Einvoice/public/user_pdfs/INV000111.pdf', array(
                'as' => 'pdf-report.pdf', 
                'mime' => 'application/pdf')
            );
            $message->from('einvoice898@gmail' , 'Alucard');
        });
    }
}
