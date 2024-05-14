<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::user()) {
            return redirect()->route('landing');
        } else {
            return view('auth.login', [
                'title' => "Login",
            ]);
        }
    }
}
