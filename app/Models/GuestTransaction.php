<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestTransaction extends Model
{
    use HasFactory;

    protected $table = 'guest_transactions';

    protected $fillable = [
        'guest_name',
        'guest_email',
        'nim',
        'facility_id',
        'activity_name',
        'transaction_code',
        'schedule_start',
        'schedule_end',
        'duration_hours',
        'description',
        'phone_number',
        'amount',
        'bank_name',
        'bank_account_number',
        'proof_of_payment',
        'status'
    ];

    public function facility() 
    {
        return $this->belongsTo(Facility::class);
    }
}
