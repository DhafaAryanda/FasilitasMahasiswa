<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Exports\TransactionExport;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;





class TransactionHistoryController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $transactions = Transaction::where('schedule_end', '<', $now)->get();

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
            'name' => $transaction->user->name,
            'role' => $transaction->user->role,
            'phone_number' => $user->phone_number,
            'email' => $transaction->user->email,
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

        public function generateGuestTransactionPDF($guestTransactionId)
    {
        $guestTransaction = GuestTransaction::findOrFail($guestTransactionId);
        $user = Auth::user();

        $path = public_path().'/storage/assets/images/logo_mbkm.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/'.$type.';base64,'.base64_encode($data);

        $pdf = Pdf::loadView('member.invoice.invoice', [
            'image' => $image,
            'date' => now(), 
            'transaction_code' => $guestTransaction->code,
            'name' => $guestTransaction->guest_name,
            'role' => 'Sewa Tanpa Akun',
            'phone_number' => $guestTransaction->phone_number,
            'email' => $guestTransaction->guest_email,
            'facility' => $guestTransaction->facility->title,
            'activity_name' => $guestTransaction->activity_name,
            'schedule_start' => $guestTransaction->schedule_start,
            'price_per_day' => $guestTransaction->facility->price_per_day,
            'duration_hour' => $guestTransaction->duration_hours,
            'schedule_end' => $guestTransaction->schedule_end,
            'amount' => $guestTransaction->amount,
            'guestTransaction' => [$guestTransaction],  // Pass the specific transaction as an array
        ]);
            $pdf->setPaper('A4', 'potrait');
            return $pdf->download('invoice.pdf');
        }

        public function export()
        {
            return Excel::download(new TransactionExport, 'transaction-'.Carbon::now()->timestamp.'.xlsx');
        }
}
