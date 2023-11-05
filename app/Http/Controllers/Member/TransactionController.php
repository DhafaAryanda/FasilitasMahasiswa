<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;
use App\Models\Transaction;
use Carbon\Carbon;




class TransactionController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $facility = Facility::find($id);
        return view('member.transaction-facility', ['user' => $user,'facility' => $facility]);
    }

    public function store(Request $request, $id)
    {
        
        
        // $data = $request->except('_token');
        $validatedData = $request->validate([
            'activity_name' => 'required|string',
            'schedule_start' => 'required|date',
            'duration_hours' => 'required|integer',
            'description' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $scheduleStart = Carbon::parse($request->input('schedule_start'));
        $durationHours = $request->input('duration_hours');

        // Calculate the 'schedule_end' based on 'schedule_start' and 'duration_hours'
        $scheduleEnd = $scheduleStart->addHours($durationHours);

        $data = $request->all();
        $data['description'] = nl2br($data['description']);
        $data['schedule_end'] = $scheduleEnd;

        // $transactionCode = 'TRX-' . Str::random(6) . '-' . time(); // Contoh format kode transaksi: TRX-RANDOM-UNIXTIME
        $nextTransactionNumber = Transaction::max('transaction_code') + 1; // Misalnya, Anda menyimpan nomor transaksi dalam tabel 'transactions'
        $data['transaction_code'] = 'TRX' . str_pad($nextTransactionNumber, 5, '0', STR_PAD_LEFT); // Contoh format kode transaksi: TRX00001
        
        $proofOfPayment = $request->file('proof_of_payment');

        if ($proofOfPayment) {
            $originalproofOfPaymentName = Str::random(10).$proofOfPayment->getClientOriginalName();
            $proofOfPayment->storeAs('public/proof_of_payment', $originalproofOfPaymentName);
            $data['proof_of_payment'] = $originalproofOfPaymentName;
        }

        $facility = Facility::find($id);
        $data['facility'] = $facility;

        $request->session()->put('transaction-facility-data', $data);

        return redirect()->route('member.transaction.confirm', ['id' => $facility->id]);
    }

    public function confirm($id)
{
    $transactionFacilityData = session('transaction-facility-data', []);
        $facility = Facility::find($id);

        return view('member.transaction-confirm', [
            'transaction' => $transactionFacilityData,
            'facility' => $facility,
        ]);
}
}
