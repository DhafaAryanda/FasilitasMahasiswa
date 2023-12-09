<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'user_id',
        'admin_handler_id',
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
        'status',
      
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function facility() 
    {
        return $this->belongsTo(Facility::class);
    }
    public function rejected_transactions()
    {
        return $this->hasOne(RejectedTransaction::class);
    }
    public function adminHandler()
    {
        return $this->belongsTo(User::class, 'admin_handler_id');
    }
    
}
