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
        'small_thumbnail',
        'about',
        'image_detail_1',
        'image_detail_2',
        'show'
    
    ];
}
