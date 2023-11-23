<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionHistoryController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('admin.manajemen.sewa.transaction-history', ['transactions' => $transactions]);
    }

    public function generatePDF($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $user = Auth::user();

        $path = public_path().'/storage/assets/images/logo_mbkm.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/'.$type.';base64,'.base64_encode($data);

        $pdf = Pdf::loadView('member.invoice.invoice', [
            'image' => $image,
            'date' => now(), 
            'transaction_code' => $transaction->code,
            'name' => $user->name,
            'role' => $user->role,
            'phone_number' => $user->phone_number,
            'email' => $user->email,
            'facility' => $transaction->facility->title,
            'activity_name' => $transaction->activity_name,
            'schedule_start' => $transaction->schedule_start,
            'price_per_day' => $transaction->facility->price_per_day,
            'duration_hour' => $transaction->duration_hours,
            'schedule_end' => $transaction->schedule_end,
            'amount' => $transaction->amount,
            'user' => $user,
            'transactions' => [$transaction],  // Pass the specific transaction as an array
        ]);
            $pdf->setPaper('A4', 'potrait');
            return $pdf->download('invoice.pdf');
        }
}
