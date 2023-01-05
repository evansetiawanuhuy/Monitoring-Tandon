<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login', 'register', 'proses_register', 'proses_login']]);
    }

    public function login(){
        return view('pages.login');
    }

    public function proses_login(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin');
        }{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function register(){
        return view('pages.register');
    }

    public function proses_register(Request $request){
        User::create($request->all());
        return redirect()->route('login');
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
