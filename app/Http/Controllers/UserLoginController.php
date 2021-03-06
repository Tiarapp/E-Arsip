<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $message = [
            'email.required' => 'Email harus di isi',
            'password.required' => 'Password harus di isi'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        Auth::attempt($data);


        if (Auth::check()) {

            if (Auth::user()->level == "user") {
                return redirect('/user');
            }

        } else {
            return redirect()->route('login')->withInput()->withErrors(['error' => 'Username atau Password tidak ditemukan!']);
        }
    }

    public function destroy()
    {
        Session::flush();

        Auth::logout();

        return redirect('/index');
    }
}
?>
