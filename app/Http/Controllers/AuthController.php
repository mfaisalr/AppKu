<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(Request $request) {
        try {
            $email = $request->email;
            $password = $request->password;

            $attempt = Auth::attempt(['email' => $email, 'password' => $password]);
            if (!$attempt) {
                return redirect('login')->with('attempt_status', 'User atau Password salah !');
            }

            return redirect('dashboard');
        } catch (\Throwable $th) {
            return redirect('login')->with('server_status', 'Please try again later.');
        }
    }

    function logout() {
        $logout = Auth::logout();

        return redirect('login');
    }
}
