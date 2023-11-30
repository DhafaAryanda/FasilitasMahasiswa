<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Str;




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

       

        $facility = Facility::find($id);
        $data['facility'] = $facility;

        $request->session()->put('transaction-facility-data', $data);

        return redirect()->route('member.transaction.confirm', ['id' => $facility->id]);
    }

    public function confirm($id)
    {
        $facility = Facility::find($id);
        $transactionFacilityData = session('transaction-facility-data', []);

        $user = Auth::user();
        
        $pricePerHour = $facility->price_per_hour;
        $durationHours = $transactionFacilityData['duration_hours'];
        $amount = $pricePerHour * $durationHours;
        
        $transactionFacilityData['amount'] = $amount;
        
        return view('member.transaction-confirm', [
            'transaction' => $transactionFacilityData,
            'facility' => $facility,
            'user' => $user,
        ]);

    }

    public function confirmStore(Request $request)
    {
        $validatedData = $request->validate([
            'bank_name' => 'required|string',
            'bank_account_number' => 'required|string',
            'proof_of_payment' => 'required|image|mimes:jpeg,jpg,png',
        ]);
    
        // Get the data from the session
        $transactionFacilityData = session('transaction-facility-data');
    
        $facility = Facility::find($transactionFacilityData['facility']->id);

         // Generate a unique transaction code
        $latestTransaction = Transaction::latest('id')->first();
        $latestTransactionId = $latestTransaction ? $latestTransaction->id : 0;
        $transactionCode = 'TRX' . str_pad($latestTransactionId + 1, 5, '0', STR_PAD_LEFT);
            
         
    
        $pricePerHour = $facility->price_per_hour;
        $durationHours = $transactionFacilityData['duration_hours'];
        $amount = $pricePerHour * $durationHours;
    
        // Mengunggah bukti transfer
        $proofOfPayment = $request->file('proof_of_payment');
        $originalproofOfPaymentName = Str::random(10) . $proofOfPayment->getClientOriginalName();
        $proofOfPayment->storeAs('public/proof_of_payment', $originalproofOfPaymentName);
    
        // Buat dan simpan transaksi ke database
        Transaction::create([
            'user_id' => Auth::id(),
            'facility_id' => $transactionFacilityData['facility']->id,
            'activity_name' => $transactionFacilityData['activity_name'],
            'transaction_code' => $transactionCode,
            'schedule_start' => $transactionFacilityData['schedule_start'],
            'schedule_end' => $transactionFacilityData['schedule_end'],
            'duration_hours' => $transactionFacilityData['duration_hours'],
            'description' => $transactionFacilityData['description'],
            'phone_number' => $transactionFacilityData['phone_number'],
            'amount' => $amount,
            'bank_name' => $request->input('bank_name'),
            'bank_account_number' => $request->input('bank_account_number'),
            'status' => 'pending', // Anda dapat mengatur status awal di sini
            'proof_of_payment' => $originalproofOfPaymentName,
        ]);
        
        // return redirect()->route('member.dashboard')->with('success', 'Fasilitas Berhasil Dipesan');

    }
    

}
