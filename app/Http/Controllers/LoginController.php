<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        if ($user = Auth::user()) {
            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('admin-dashboard');
                    break;

                case 'operator':
                    return redirect()->intended('dashboard');
                    break;

                case 'owner':
                    return redirect()->intended('home');
                    break;
                default:
                    return redirect('login');
            }
        }
        return view('auth.index');
    }

    public function login(AuthRequest $request)
    {

        $credential = $request->only('email', 'password');
        // dd($credential);

        $request->session()->regenerate();

        if (Auth::attempt($credential)) {
            
            if (auth()->user()->role == 'admin') {

                return redirect()->route('admin-dashboard');

            }else if (auth()->user()->role == 'operator') {

                return redirect()->route('dashboard');

            }else if (auth()->user()->role == 'owner') {

                return redirect()->route('home');

            }
        
            }else{
                return redirect()->route('/')->with('error', 'Email atau password salah');
        }
    
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
