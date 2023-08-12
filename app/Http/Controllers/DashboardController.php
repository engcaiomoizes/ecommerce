<?php

namespace App\Http\Controllers;

use App\Models\Controle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    
    public function login(Request $request) {
        $request->validate([
            'login' => 'required|string',
            'senha' => 'required|string'
        ]);

        $user = Controle::where('login', '=', $request->login)->first();

        if ($user) {
            if ($request->senha == $user->senha) {
                $request->session()->put('loginId', $user->id);
                return redirect('/dashboard');
            } else {
                return back()->with('fail', 'A senha está incorreta!');
            }
        } else {
            return back()->with('fail', 'Este usuário não está cadastrado.');
        }
    }

    public function logout() {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('/dashboard');
        }
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function index() {
        return view('admin.login');
        // return "OK";
    }

}
