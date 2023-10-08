<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $table = 'facilities';

    protected $fillable = [
        'title',
        'small_thumbnail',
        'refund_proof',
        'image_detail1',
        'image_detail2',
        'categories',
        'about',
        'latest_schedule',
        'hide'
    ];
}
