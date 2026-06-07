<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomemail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $toEmail = "hkm780414@gmail.com";
        $message = "Hello, this is a test email from Laravel!";
        $subject = "Welcome to Email Sending in Laravel";

        //now if we need to send data with mail as well, such in case of ecommerce site
        $details = [
            'name' => 'John Doe',
            'product' => 'Laravel T-shirt',
            'price' => '$19.99',
        ];

        // Use the mail function to send the email
        $request = Mail::to($toEmail)->send(new welcomemail($message, $subject, $details));
        dd($request);
    }
}
