<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\FuncCall;

class SessionController extends Controller
{
    function index()
    {
        // if (Auth::user()){
        //     return redirect()->intended('home');
        // }
        // return view('login');
        return view('login');
    }
    function login(Request $request)
    {
        Session::flash('email', $request->input('email'));
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('home')->with('success', 'Berhasil login');
        } else {
            return redirect('/')->withErrors('Email atau password yang dimasukkan tidak sesuai');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil LogOut');
    }

    function register()
    {
        return view('register');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->input('name'));
        Session::flash('email', $request->input('email'));
        Session::flash('username', $request->input('username'));
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'password' => 'required|min:8'
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email yang dimasukkan tidak valid',
            'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Minumum password 8 karakter'
        ]);
    
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => '2'
        ];
        User::create($data);
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
    
        if (Auth::attempt($infologin)) {
            return redirect('/')->with('success', 'Berhasil membuat akun, silahkan login');
        } else {
            return redirect('/')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }
}