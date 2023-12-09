<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // Retrieve the user's transactions
        $transactions = Transaction::where('user_id', $user->id)->get();

        return view('admin.profile', ['user' => $user, 'transactions' => $transactions]);
    }
}
