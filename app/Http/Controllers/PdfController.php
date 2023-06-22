<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Promo;
use App\Models\Reservasi;
use App\Models\User;
use App\Models\Paket_Admin;

class PdfController extends Controller
{
    public function promoexportpdf(){
        $promo = Promo::all();
        view()->share('promo', $promo);
        $pdf = Pdf::Loadview('admin.promo.datapromo-pdf');
        return $pdf->download('datapromo.pdf');
    }
    public function reservasiexportpdf(){
        $reservasi = Reservasi::all();
        view()->share('reservasi', $reservasi);
        $pdf = Pdf::Loadview('admin.reservasi.datareservasi-pdf');
        return $pdf->download('datareservasi.pdf');
    }
    public function userexportpdf(){
        $user = User::all();
        view()->share('user', $user);
        $pdf = Pdf::Loadview('admin.users.datauser-pdf');
        return $pdf->download('datauser.pdf');
    }
    public function paketexportpdf(){
        $paket = Paket_Admin::all();
        view()->share('paket', $paket);
        $pdf = Pdf::Loadview('admin.paket.datapaket-pdf');
        return $pdf->download('datapaket.pdf');
    }
}