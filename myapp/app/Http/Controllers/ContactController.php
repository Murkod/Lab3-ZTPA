<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PHPMailerService;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to = $request->input('email');
        $subject = $request->input('subject');
        $body = $request->input('message');

        // Wywołanie metody sendEmail z klasy PHPMailerService
        $result = PHPMailerService::sendEmail($to, $subject, $body);

        if ($result === true) {
            return redirect()->back()->with('success', 'Email sent successfully!');
        } else {
            return redirect()->back()->with('error', $result);
        }
    }
}
