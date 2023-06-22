<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservasi;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservasi = [
            [
            'nama_pemesan' => 'dhimas',
            'nama_paket' => 'PREWEDDING PHOTO',
            'harga_paket' => '250.000',
            'no_hp' => '08912345',
            'tanggal' => '2023-1-2',
            'jam' => '19:12',
            'jumlah_orang' => '2',
            'deskripsi' => 'bismilah'
            ],
            [
            'nama_pemesan' => 'ikmal',
            'nama_paket' => 'MATERNITY PHOTO',
            'harga_paket' => '250.000',
            'no_hp' => '08912345',
            'tanggal' => '2023-11-1',
            'jam' => '19:12',
            'jumlah_orang' => '2',
            'deskripsi' => 'bismilah'
            ],
        ];
        foreach($reservasi as $key => $value){
            reservasi::create($value);
        }
    }
}