<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;
    protected $fillable = ['nama_promo','gambar_promo','total_promo','status','deskripsi'];
    protected $table = 'promo';
    public $timestamps = false;
}