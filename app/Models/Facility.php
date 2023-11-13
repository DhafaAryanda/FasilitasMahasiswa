<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Facility extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'facilities';

    protected $fillable = [
        'title',
        'categories',
        'about',
        'image1_detail',
        'image2_detail',
        'image3_detail',
        'image4_detail',
        'price_per_hour',
        'price_per_day',
        'show'
    
    ];

    public function transaction() 
    {
        return $this->belongsTo(Transaction::class);
    }
}
