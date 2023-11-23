<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateTransactionController extends Controller
{
    public function index()
    {
        return view('admin.manajemen.sewa.create-transaction');
    }
}
