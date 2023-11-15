<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Retrieve the user's transactions
        $transactions = Transaction::where('user_id', $user->id)->get();
        
        if (request('output') == 'pdf') { 
            $pdf = Pdf::loadView('member.invoice.invoice');
            return $pdf->download('invoice.pdf');
        }

        return view('member.profile', ['user' => $user, 'transactions' => $transactions]);
    }
}
