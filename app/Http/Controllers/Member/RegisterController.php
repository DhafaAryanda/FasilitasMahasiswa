<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('member.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $data = $request->except('_token');

        $isEmailExist = User::where('email', $request->email)->exists();

        if($isEmailExist) {
            return back()
            ->withErrors([
                'email' => 'Email ini sudah terpakai'
            ])
            ->withInput();
        }

        $data['role'] = 'umum';
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('admin.login');
    }
}
