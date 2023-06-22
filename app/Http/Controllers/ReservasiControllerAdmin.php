<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Storage;

class ReservasiControllerAdmin extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('admin.reservasi.index', compact('reservasi'));
    }

    public function create()
    {
        return view('admin.reservasi.create');
    }

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
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $reservasi = Reservasi::find($id);
        return view('admin.reservasi.edit', compact('reservasi'));
    }

    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::find($id);
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
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diupdate');
    }

    public function destroy($id)
    {
        $reservasi = Reservasi::find($id);
        if ($reservasi->bukti_boking) {
            Storage::delete('buktiboking/'.$reservasi->bukti_boking);
        }
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus');
    }

    public function search(Request $request) {
        $keyword = $request->keyword;
        $jumlahbaris = 4;
        if(strlen($keyword)){
            $reservasi = Reservasi::where('nama_pemesan', 'LIKE', "%$keyword%")
                ->orWhere('nama_paket', 'LIKE', "%$keyword%")
                ->orWhere('harga_paket', 'LIKE', "%$keyword%")
                ->orWhere('no_hp', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('jam', 'LIKE', "%$keyword%")
                ->orWhere('jumlah_orang', 'LIKE', "%$keyword%")
                ->orWhere('gambar', 'LIKE', "%$keyword%")
                ->orWhere('deskripsi', 'LIKE', "%$keyword%")
                ->paginate($jumlahbaris);
        }else{
            $reservasi = Reservasi::orderBy('nama_pemesan','desc')->paginate($jumlahbaris);
        }
        // return view('reservasi.index', compact('reservasi'));
        return view('reservasi.index')->with('reservasi', $reservasi);
    }
}