<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct()
    {
        //$this->middleware('isAdmin')->except(['login','logout']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(!Auth::user()):
            return view('login.login');
        else:
            if(Auth::user()->role == 'admin'):
                return redirect()->to('/dashboard');
            else:
                return redirect()->to('/kasir/dashboard');
            endif;
        endif;
    }

    public function check(Request $request){
        $akun = $request->validate(
            [
                'username' => ['required'],
                'password' => ['required']
            ]
            );
        if(Auth::attempt($akun)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin'):
                return redirect()->to('/dashboard');
            else:
                return redirect()->to('/kasir/dashboard');
            endif;
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
