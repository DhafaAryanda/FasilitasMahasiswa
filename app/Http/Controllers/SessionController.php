<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function index()
    {
        return view('member.auth');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required', 
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'

        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            if(Auth::user()->role == 'admin'){
                return redirect('admin');
            } elseif (Auth::user()->role == 'operator'){
                return redirect('operator');
            } elseif (Auth::user()->role == 'mahasiswa'){
                return redirect('mahasiswa');
            } elseif (Auth::user()->role == 'umum'){
                return redirect('umum');
            }

        } else {
            return redirect()->back()->withErrors('Username dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    public function logout()
    {
    Auth::logout();
    return redirect()->route('login');
    }
}
