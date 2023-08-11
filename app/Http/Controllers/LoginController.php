<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginController extends Controller
{

    public function login(Request $request) {
        //
    }

    public function logout() {
        try {
            if (Auth::check()) {
                Auth::logout();
            }
            return redirect()->back();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}
