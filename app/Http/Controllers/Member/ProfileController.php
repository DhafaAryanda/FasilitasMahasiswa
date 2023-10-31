<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('member.profile', ['user' => $user]);
    }
}
