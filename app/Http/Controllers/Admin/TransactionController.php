<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with([
            'user',
            'facility'
        ])->get();
        // dd($transactions);
        return view('admin.manajemen.peminjaman.facility', ['transactions' => $transactions]);
    }
}
