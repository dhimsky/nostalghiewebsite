<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
{
    $users = User::all();
    return view('admin.users.index', compact('users'));
}


public function create()
{
    return view('admin.users.create');
}

public function store(Request $request)
{
   $users = new User;
   $users->name =  $request->input('name');
   $users->email =  $request->input('email');
   $users->username =  $request->input('username');
   $users->password =  $request->input('password');
   $users->level =  $request->input('level');
   $users->save();
   return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
}

public function edit($id)
{
    $users = User::find($id);
    return view('admin.users.edit', compact('users'));
}

public function update(Request $request, $id)
{
    $users = User::find($id);
    $users->name =  $request->input('name');
    $users->email =  $request->input('email');
    $users->username =  $request->input('username');
    $users->level =  $request->input('level');
    $users->save();
    return redirect()->route('users.index')->with('success', 'User berhasil di Update');
}

public function destroy($id)
{
    $users = User::find($id);
    $users->delete();

    return redirect()->route('users.index')->with('success', 'User berhasil di Hapus');
}

}