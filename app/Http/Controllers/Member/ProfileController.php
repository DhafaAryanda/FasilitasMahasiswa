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

        return view('member.profile', ['user' => $user, 'transactions' => $transactions]);
    }

    public function generatePDF()
    {

        $user = Auth::user();
        $transactions = Transaction::where('user_id', $user->id)->get();

        $path = public_path().'/storage/assets/images/logo_mbkm.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $image = 'data:image/'.$type.';base64,'.base64_encode($data);
        
       // Assuming $transactions is an array of transactions
    $firstTransaction = $transactions->first();

    $pdf = Pdf::loadView('member.invoice.invoice', [
        'image' => $image,
        'date' => now(),  // You should replace this with the actual date variable
        'transaction_code' => $firstTransaction->code, // Replace 'code' with the actual column name
        'name' => $user->name,
        'role' => $user->role,  // Replace 'role' with the actual column name
        'phone_number' => $user->phone_number,  // Replace 'phone_number' with the actual column name
        'email' => $user->email,
        'facility' => $firstTransaction->facility->title, // Replace 'title' with the actual column name
        'activity_name' => $firstTransaction->activity_name, // Replace 'activity_name' with the actual column name
        'schedule_start' => $firstTransaction->schedule_start, // Replace 'schedule_start' with the actual column name
        'duration_hour' => $firstTransaction->duration_hours, // Replace 'duration_hours' with the actual column name
        'schedule_end' => $firstTransaction->schedule_end, // Replace 'schedule_end' with the actual column name
        'amount' => $firstTransaction->amount, // Replace 'amount' with the actual column name
        'user' => $user,
        'transactions' => $transactions,
    ]);
        $pdf->setPaper('A4', 'potrait');
        return $pdf->download('invoice.pdf');
    }
}
