<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function proseslogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->first();
        
        if($user) {
            if(Auth::attempt([
                'username' => $username,
                'password' => $password
            ])) {
                return redirect()->route('dashboard');
            }
            $credentials = $request->validate([
                'username' => 'required|max:255',
                'password' => 'required|min:5'
            ]);
    
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->with('loginEror', 'login failed !');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }

}
