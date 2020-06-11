<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function donations() {
        $title = "Make a donation";
        $donations = DB::table('donations')->get();

        return view('pages.donations', [
            'title' => $title,
            'donations' => $donations
        ]);
    }

    public function postDonations(Request $r) {
        $amount = number_format((float)$r->amount, 2, '.', '');
        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'amount' => $amount,
            'message' => $r->message,
            'check' => $r->check,
            'date' => date('Y-m-d H:i:s')
        ];

        DB::table('donations')->insert($data);
        return redirect('donations')->with('success', 'Thanks For Subscribing');

    }
}
