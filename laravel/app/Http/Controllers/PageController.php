<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $title = 'End of the first lesson';
        $content = 'Thanks for visiting';

        return view('pages.home', [
            'title' => $title,
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
        return view('pages.contact');
    }

    public function donation() {
        return view('pages.donation');
    }

    public function newsletter() {
        return view('pages.newsletter');
    }

    public function privacy() {
        return view('pages.privacy');
    }

}
