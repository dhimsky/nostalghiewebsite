<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // Menghitung jumlah baris pada tabel "users"
        $count = DB::table('users')->count();
        $users = User::all();
    
        // Mengirimkan variabel $count ke tampilan (view)
        return view('admin.dashboard.index', compact('count', 'users'));
    }

}