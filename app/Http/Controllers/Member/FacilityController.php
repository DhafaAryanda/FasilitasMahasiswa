<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('show', true)
        ->orderBy('created_at', 'DESC')
        ->get();

        return view('member.konten.facility', ['facilities' => $facilities]);
    }

    public function show($id)
    {
        $facility = Facility::find($id);

        return view('member.konten.facility-detail', ['facility' => $facility]);
    }
}
