<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            switch ($user->level) {
                case '1':
                    return redirect()->intended('dashboard');
                    break;
                
                case '2':
                    return redirect()->intended('resepsionis');
                    break;
            }
        }
        return view('auth.login');
    }

// REQUEST CEK LOGIN
    public function cekLogin(AuthRequest $request){
        $credential = $request->only('username', 'password');
        $request->session()->regenerate();
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            switch ($user->level) {
                case '1':
                    return redirect()->intended('dashboard');
                    break;
                
                case '2':
                    return redirect()->intended('resepsionis');
                    break;
            }
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'nofound' => 'Username or Password is wrong'
        ])->onlyInput('username');
    }

// LOGOUT
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
