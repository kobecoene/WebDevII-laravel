<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
class NewsLetterController extends Controller
{

    public function postNewsletter(Request $request) {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribe($request->email);
            return redirect('/')->with('success', 'Thanks For Subscribe');

        } else {
            return redirect('/')->with('failure', 'Sorry! You have already subscribed ');
        }
    }
}
