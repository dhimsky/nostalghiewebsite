<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama_pemesan','nama_paket','harga_paket','no_hp','tanggal','jam','jumlah_orang','bukti_boking','deskripsi'];
    protected $table = 'reservasi';
    public $timestamps = false;
}