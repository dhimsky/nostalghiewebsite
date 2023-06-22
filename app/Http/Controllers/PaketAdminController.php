<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket_Admin;

class PaketAdminController extends Controller
{
    public function index()
{
    $paket = Paket_Admin::all();
    return view('admin.paket.index', compact('paket'));
}

public function create()
{
    return view('admin.paket.create');
}

public function store(Request $request)
{
   $paket = new Paket_Admin;
   $paket->nama_paket =  $request->input('nama_paket');
   $paket->gambar_paket =  $request->input('gambar_paket');
   $paket->hrg_paket =  $request->input('hrg_paket');
   $paket->status =  $request->input('status');
   $paket->deskripsi =  $request->input('deskripsi');
   if($request->hasFile('gambar_paket'))
   {
    $request->file('gambar_paket')->move('gambarpaket/', $request->file('gambar_paket')->getClientOriginalName());
    $paket->gambar_paket = $request->file('gambar_paket')->getClientOriginalName();
    $paket->save();
   }
   $paket->save();
   return redirect()->route('paket.index')->with('success', 'Paket berhasil ditambahkan');
}

public function edit($id)
{
    $paket = Paket_Admin::find($id);
    return view('admin.paket.edit', compact('paket'));
}

public function update(Request $request, $id)
{
    $paket = Paket_Admin::find($id);
    $paket->nama_paket =  $request->input('nama_paket');
    $paket->gambar_paket =  $request->input('gambar_paket');
    $paket->hrg_paket =  $request->input('hrg_paket');
    $paket->status =  $request->input('status');
    $paket->deskripsi =  $request->input('deskripsi');
    if($request->hasFile('gambar_paket'))
    {
        $request->file('gambar_paket')->move('gambarpaket/', $request->file('gambar_paket')->getClientOriginalName());
        $paket->gambar_paket = $request->file('gambar_paket')->getClientOriginalName();
        $paket->save();
    }
    $paket->save();
    return redirect()->route('paket.index')->with('success', 'Paket berhasil diUpdate');
}

public function destroy($id)
{
    $paket = Paket_Admin::find($id);
    $paket->delete();

    return redirect()->route('paket.index')->with('success', 'Paket berhasil dihapus');
}

}