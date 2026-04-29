<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function send(Request $request){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        try {
            Mail::raw(
                "Name: {$data['name']}\nEmail: {$data['email']}\nSubject: {$data['subject']}\nMessage: {$data['message']}",
                
                function ($message) use ($data) {
                    $message->to('sahgomit20@gmail.com')->subject($data['subject'])->replyTo($data['email']);
                }
            );

            return back()->with('success', 'Mail sent successfully');

        } catch (\Exception $error) {
            return back()->with('error', 'Error: '.$error->getMessage());
        }
    }
}