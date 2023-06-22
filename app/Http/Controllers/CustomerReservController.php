<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class CustomerReservController extends Controller
{
    public function store(Request $request)
    {
        $reservasi = new Reservasi;
        $reservasi->nama_pemesan = $request->input('nama_pemesan');
        $reservasi->nama_paket = $request->input('nama_paket');
        $reservasi->harga_paket = $request->input('harga_paket');
        $reservasi->no_hp = $request->input('no_hp');
        $reservasi->tanggal = $request->input('tanggal');
        $reservasi->jam = $request->input('jam');
        $reservasi->jumlah_orang = $request->input('jumlah_orang');
        $reservasi->bukti_boking = $request->input('bukti_boking');
        $reservasi->deskripsi = $request->input('deskripsi');
        if($request->hasFile('bukti_boking')){
            $request->file('bukti_boking')->move('buktiboking/', $request->file('bukti_boking')->getClientOriginalName());
            $reservasi->bukti_boking = $request->file('bukti_boking')->getClientOriginalName();
            $reservasi->save();
        }
        $reservasi->save();
        return redirect('package')->with('success', 'Anda berhasil Reservasi');
    }
}