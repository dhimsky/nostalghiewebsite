<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_Admin extends Model
{
    use HasFactory;
    protected $fillable = ['nama_paket','gambar_paket','hrg_paket','status','deskripsi'];
    protected $table = 'paket_admin';
    public $timestamps = false;
}