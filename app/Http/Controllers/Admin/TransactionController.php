<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\RejectedTransaction;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;




class TransactionController extends Controller
{
    public function index()
    {
        // $transactions = Transaction::with(['user', 'facility'])->get();
        // dd($transactions);

        $now = Carbon::now();
    $pendingTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'pending')
        ->get();

    $activeTransactions = Transaction::with(['user', 'facility'])
        ->where('status', 'confirmed')
        ->where('schedule_end', '>', $now)
        ->get();

    return view('admin.manajemen.sewa.facility', [
        'pendingTransactions' => $pendingTransactions,
        'activeTransactions' => $activeTransactions,]);
    }

    public function show($id)
    {
        $transaction = Transaction::find($id);
        return view('admin.manajemen.sewa.facility-detail', ['transaction' => $transaction]);
    }

    public function confirm($id)
    {
        $transaction = Transaction::find($id);
        if ($transaction) {
            // Ubah status transaksi menjadi 'confirmed'
            $transaction->status = 'confirmed';

            // Catat admin_handler_id
            $transaction->admin_handler_id = auth()->user()->id;

            $transaction->save();
        }

        // Redirect ke halaman sebelumnya atau halaman yang sesuai
        return redirect()->route('admin.manajemen.sewa.facility')->with('success', 'Transaksi berhasil dikonfirmasi');
    }        

    public function reject(Request $request, $id)
    { 
        $request->validate([ 
            'message' => 'required|string',
            'refund_proof' => 'required|image|mimes:jpeg,jpg,png'
        ], [
            'message.required' => 'Alasan menolak sewa belum dimasukkan.',
            'refund_proof.required' => 'Bukti pengembalian dana belum diunggah.'
        ]);
        
        $data = $request->except('_token');    
        // dd($data);    
        $refundProof = $request->file('refund_proof');

        if ($refundProof) {
            $originalRefundProofName = Str::random(10).$refundProof->getClientOriginalName();
            $refundProof->storeAs('public/refund', $originalRefundProofName);
            $data['refund_proof'] = $originalRefundProofName;
        }

        $transaction = Transaction::find($id);
        if ($transaction) {
            // Ubah status transaksi menjadi 'rejected'
            $transaction->status = 'rejected';

            // Catat admin_handler_id
            $transaction->admin_handler_id = auth()->user()->id;
            
            $transaction->save();
        }

        RejectedTransaction::create($data);

        return redirect()->route('admin.manajemen.sewa.facility')->with('success', 'Fasilitas berhasil ditolak');

    }
}
