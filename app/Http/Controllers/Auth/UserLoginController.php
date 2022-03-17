<?php

namespace App\Http\Controllers;

class UserLoginController extends Controller
{
    public function index() 
    {
        return view('auth.login');
    }
}
?>