<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $title = 'End of the first lesson';
        $content = 'Thanks for visiting';
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
        return view('pages.contact');
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
