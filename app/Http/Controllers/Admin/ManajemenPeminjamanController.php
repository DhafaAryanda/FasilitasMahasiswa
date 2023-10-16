<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManajemenPeminjamanController extends Controller
{
    public function index()
    {

        return view('admin.manajemen.peminjaman.facility');
    }
}
