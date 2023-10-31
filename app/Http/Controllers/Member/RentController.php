<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('member.rent-facility', ['user' => $user]);
    }

    public function confirm()
    {
        // $transaction = Transaction::find($id);
        // if ($transaction) {
        //     // Ubah status transaksi menjadi 'confirmed'
        //     $transaction->status = 'confirmed';
        //     $transaction->save();
        // }

        // Redirect ke halaman sebelumnya atau halaman yang sesuai
        // return redirect()->route('admin.manajemen.sewa.facility')->with('success', 'Transaksi berhasil dikonfirmasi');

        $user = Auth::user();
        return view('member.rent-confirm', ['user' => $user]);
    }        

}
