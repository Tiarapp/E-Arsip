<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        // dd(Hash::make('123456'));
        return view('auth.register');
        
    }

    public function store(Request $request)
    {

        $messages = [
            'name.required' => 'Nama harus di isi',
            'email.required' => 'Email harus di isi',
            'password.required' => 'Password harus di isi'
        ];

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'user'
        ]);

        // dd($user);   

        auth()->login($user);

        // dd(Auth::check());

        if (Auth::check()) {
            // dd(Auth::user()->level == "user");
            if (Auth::user()->level == "user") {
                return redirect('/user/jenis_dokumen');
            }

            // return redirect()->route('user.dashboard');

        } else {
            return redirect()->route('login')->withInput()->withErrors(['error' => 'Username atau Password tidak ditemukan!']);
        }
    }
}
