<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;
class NewsLetterController extends Controller
{

    public function postNewsletter(Request $request) {
        if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribing');
        }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');
    }
}
