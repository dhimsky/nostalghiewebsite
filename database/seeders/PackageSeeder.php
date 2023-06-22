<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = [
            [
            'nama_paket' => 'PREWEDDING PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '250.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
            [
            'nama_paket' => 'WEDDING PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '400.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
            [
            'nama_paket' => 'MATERNITY PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '200.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
            [
            'nama_paket' => 'FAMILY PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '500.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
            [
            'nama_paket' => 'GRADUATION PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '200.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
            [
            'nama_paket' => 'GROUP PHOTO',
            'gambar_paket' => '',
            'hrg_paket' => '550.000',
            'status' => 'tersedia',
            'deskripsi' => '',
            ],
        ];
        foreach($package as $key => $value){
            package::create($value);
        }
    }
}