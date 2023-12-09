<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Transaction;




class CreateTransactionController extends Controller
{
    public function index()
    {

        $facilities = Facility::all();

        return view('admin.manajemen.sewa.create-transaction', compact('facilities'));
    }


    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'facility_id' => 'required|string',
            'guest_name' => 'required|string',
            'guest_email' => 'email',
            'nim' => 'required|string',
            'activity_name' => 'required|string',
            'schedule_start' => 'required|date',
            'duration_hours' => 'required|integer',
            'description' => 'required|string',
            'phone_number' => 'required|string',
        ], [
            'facility_id.required' => 'Nama Prasarana belum dipilih.',
            'guest_name.required' => 'Nama penyewa belum diisi.',
            'guest_email.email' => 'Format email tidak valid.',
            'nim.required' => 'NIM/NIP belum diisi',
            'activity_name.required' => 'Nama Kegiatan belum diisi',
            'schedule_start.required' => 'Jadwal Kegiatan Berlangsung belum diisi',
            'duration_hours.required' => 'Durasi Kegiatan belum diisi',
            'description.required' => 'Deskripsi Kegiatan belum diisi',
            'phone_number.required' => 'Nomor Telepon belum diisi',
        ]);

        $scheduleStart = Carbon::parse($request->input('schedule_start'));
        $durationHours = $request->input('duration_hours');

        // Calculate the 'schedule_end' based on 'schedule_start' and 'duration_hours'
        // $scheduleEnd = $scheduleStart->addHours($durationHours);
        $scheduleEnd = Carbon::parse($request->input('schedule_start'))->addHours($durationHours);


        $overlapTransaction = Transaction::where('facility_id', $request->input('facility_id'))
    ->where(function ($query) use ($scheduleStart, $scheduleEnd) {
        $query->where(function ($query) use ($scheduleStart, $scheduleEnd) {
            $query->where('schedule_start', '<', $scheduleEnd)
                ->where('schedule_end', '>', $scheduleStart);
        })
        ->orWhere(function ($query) use ($scheduleStart, $scheduleEnd) {
            $query->where('schedule_start', '>=', $scheduleStart)
                ->where('schedule_start', '<', $scheduleEnd);
        })
        ->orWhere(function ($query) use ($scheduleStart, $scheduleEnd) {
            $query->where('schedule_end', '>', $scheduleStart)
                ->where('schedule_end', '<=', $scheduleEnd);
        });
    })
    ->first();


        if ($overlapTransaction) {
            return back()->withErrors([
            'error' => 'Waktu yang dipilih bertabrakan dengan transaksi yang sudah ada.'
        ])->withInput();
        }
        
        // if ($overlapTransaction) {
        //     return back()->withErrors([
        //     'error' => 'Waktu yang dipilih bertabrakan dengan transaksi yang sudah ada.'
        // ])->withInput();
        // }
        

        $data = $request->all();

        $data['description'] = nl2br($data['description']);
        $data['schedule_end'] = $scheduleEnd;


        $request->session()->put('transaction-facility-data', $data);

        return redirect()->route('admin.manajemen.create.transaction.confirm');
    }

    public function confirm()
    {
        $transactionFacilityData = session('transaction-facility-data', []);
        

        $facilityId = $transactionFacilityData['facility_id'];
        $facility = Facility::find($facilityId);
        
        $pricePerHour = $facility->price_per_hour;
        $durationHours = $transactionFacilityData['duration_hours'];
        $amount = $pricePerHour * $durationHours;
        $transactionFacilityData['amount'] = $amount;

        // $transactionFacilityData['amount'] = $amount;
        
        return view('admin.manajemen.sewa.create-transaction-confirm', [
            'transaction' => $transactionFacilityData,
            'facility' => $facility,
        ]);

    }

    public function confirmStore(Request $request)
    {
        $validatedData = $request->validate([

            'bank_name' => 'required|string',
            'bank_account_number' => 'required|string',
            'proof_of_payment' => 'required|image|mimes:jpeg,jpg,png',
        ], [
            'bank_name.required' => 'Nama Bank belum diisi',
            'bank_account_number.required' => 'Nomor rekening belum diisi',
            'proof_of_payment.required' => 'Bukti transfer belum diisi',
        ]);
    
        // Get the data from the session
        $transactionFacilityData = session('transaction-facility-data');
    
        $facilityId = $transactionFacilityData['facility_id'];
        $facility = Facility::find($facilityId);

         // Generate a unique transaction code
        $latestTransaction = Transaction::latest('id')->first();
        $latestTransactionId = $latestTransaction ? $latestTransaction->id : 0;
        $transactionCode = 'TRX' . str_pad($latestTransactionId + 1, 5, '0', STR_PAD_LEFT);
            
        $transactionFacilityData['admin_handler_id'] = auth()->user()->id;
    
        $pricePerHour = $facility->price_per_hour;
        $durationHours = $transactionFacilityData['duration_hours'];
        // $amount = $pricePerHour * $durationHours;
        $amount = $request->filled('amount') ? $request->input('amount') : $pricePerHour * $durationHours;

    
        // Mengunggah bukti transfer
        $proofOfPayment = $request->file('proof_of_payment');
        $originalproofOfPaymentName = Str::random(10) . $proofOfPayment->getClientOriginalName();
        $proofOfPayment->storeAs('public/proof_of_payment', $originalproofOfPaymentName);
    
        // Buat dan simpan transaksi ke database
        Transaction::create([
            // 'user_id' => Auth::id(),
            'admin_handler_id' => $transactionFacilityData['admin_handler_id'],
            'guest_name' => $transactionFacilityData['guest_name'],
            'guest_email' => $transactionFacilityData['guest_email'],
            'facility_id' => $facilityId,
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
            'status' => 'success', // Anda dapat mengatur status awal di sini
            'proof_of_payment' => $originalproofOfPaymentName,
        ]);

        // Alert::success('Hore!', 'Post Created Successfully');
        
        return redirect()->route('admin.dashboard')->with('success', 'Prasarana Berhasil Dibuat')->with('toast_success', 'Task Created Successfully!');;

    }

}
