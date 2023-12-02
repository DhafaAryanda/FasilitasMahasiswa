<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class DashboardController extends Controller
{
    public function index()
    {
        $facilities = Facility::where('show', true)
        ->orderBy('created_at', 'DESC')
        ->paginate(3);

        return view('member.dashboard',  ['facilities' => $facilities]);
    }
}
