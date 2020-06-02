<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $title = 'We bring people together.';
        $content = '<p>We here at messenger want to make the world connect with eachother. That\'s why we made this app.</p><p>You can chat with your friends, take part in group videocalls, have group conversations, share pictures, ... You name it, we have it.</p><p>We\'d love to have you on board and can\'t wait for you to start chatting.</p><p class="bodyPromo">Start now for free:</p>';
        $image = 'images/mockup_fixed.png';

        return view('pages.home', [
            'title' => $title,
            'image' =>$image,
            'content' => $content
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function blog() {
        return view('pages.blog');
    }

    public function contact() {
        $title = "Contact us";

        return view('pages.contact', [
            'title' => $title
        ]);
    }

    public function donations() {
        return view('pages.donations');
    }

    public function newsletter() {
        return view('pages.newsletter');
    }

    public function privacy() {
        return view('pages.privacy');
    }

}
