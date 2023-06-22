<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
{
    $promo = Promo::all();
    return view('admin.promo.index', compact('promo'));
}

public function create()
{
    return view('admin.promo.create');
}

public function store(Request $request)
{
   $promo = new Promo;
   $promo->nama_promo =  $request->input('nama_promo');
   $promo->gambar_promo =  $request->input('gambar_promo');
   $promo->total_promo =  $request->input('total_promo');
   $promo->status =  $request->input('status');
   $promo->deskripsi =  $request->input('deskripsi');
   if($request->hasFile('gambar_promo'))
   {
    $request->file('gambar_promo')->move('gambarpromo/', $request->file('gambar_promo')->getClientOriginalName());
    $promo->gambar_promo = $request->file('gambar_promo')->getClientOriginalName();
    $promo->save();
   }
   $promo->save();
   return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan');
}

public function edit($id)
{
    $promo = Promo::find($id);
    return view('admin.promo.edit', compact('promo'));
}

public function update(Request $request, $id)
{
    $promo = Promo::find($id);
    $promo->nama_promo =  $request->input('nama_promo');
    $promo->gambar_promo =  $request->input('gambar_promo');
    $promo->total_promo =  $request->input('total_promo');
    $promo->status =  $request->input('status');
    $promo->deskripsi =  $request->input('deskripsi');
    if($request->hasFile('gambar_promo'))
    {
        $request->file('gambar_promo')->move('gambarpromo/', $request->file('gambar_promo')->getClientOriginalName());
        $promo->gambar_promo = $request->file('gambar_promo')->getClientOriginalName();
        $promo->save();
    }
   $promo->save();
   return redirect()->route('promo.index')->with('success', 'Promo berhasil diupdate');
}

public function destroy($id)
{
    $promo = Promo::find($id);
    $promo->delete();

    return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus');
}

}