<?php

namespace App\Http\Controllers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Carbon\Carbon as Carbon;

$donations = [];

class DonationController extends Controller
{
    public function donations() {
        $title = "Make a donation";

        return view('pages.donations', [
            'title' => $title
        ]);
    }

    public function postDonations(Request $r) {

        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'amount' => $r->amount,
            'message' => $r->message,
            'check' => $r->check,
            'dateNow' => date('Y-m-d H:i:s')
        ];

        DB::table('donations')->insert($data);
    }
}
