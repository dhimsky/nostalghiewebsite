<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class OwnerReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('owner.reservasi.index', compact('reservasi'));
    }
}