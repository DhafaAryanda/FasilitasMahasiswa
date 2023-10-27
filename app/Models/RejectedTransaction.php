<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RejectedTransaction extends Model
{
    use HasFactory;

    protected $table = 'rejected_transactions';

    protected $fillable = [
        'transaction_id',
        'message',
        'refund_proof'
    ];

    public function transaction() 
    {
        return $this->belongsTo(Transaction::class);
    }
}