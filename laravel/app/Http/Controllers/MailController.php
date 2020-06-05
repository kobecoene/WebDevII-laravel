<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact() {
        $title = "Contact us";

        return view('pages.contact', [
            'title' => $title
        ]);
    }

    public function postContact(Request $r) {

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'content' => $r->content,
        ];

        Mail::send('mails.contact', $data, function ($message) use($r) {
            // $message->sender('kobecoen@student.arteveldehs.be');
            $message->to('kobecoen@student.arteveldehs.be', 'Kobe Coene');
            $message->cc($r->email, $r->name);
            $message->subject($r->subject);
            // $message->priority(3);
            // $message->attach('pathToFile');
        });

    }
}
