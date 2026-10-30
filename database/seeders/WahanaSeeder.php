<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Wahana;

class WahanaSeeder extends Seeder
{
    public function run(): void
    {
        $daftarWahana = [
            [
                'nama' => 'Roller Coaster',
                'kategori' => 'Ekstrem',
                'harga' => 50000,
                'gambar' => 'images\wahana\rolercoaster.jpg',
            ],
            [
                'nama' => 'Bianglala',
                'kategori' => 'Santai',
                'harga' => 25000,
                'gambar' => 'images\wahana\bianglala.jpg',
            ],
            [
                'nama' => 'Rumah Hantu',
                'kategori' => 'Petualangan',
                'harga' => 35000,
                'gambar' => 'images\wahana\rumahhantu.jpg',
            ],
            [
                'nama' => 'Komidi Putar',
                'kategori' => 'Santai',
                'harga' => 20000,
                'gambar' => 'images\wahana\komidiputar.jpg',
            ],
            [
                'nama' => 'Drop Tower',
                'kategori' => 'Ekstrem',
                'harga' => 40000,
                'gambar' => 'images\wahana\droptower.jpg',
            ],
            [
                'nama' => 'Kora-Kora',
                'kategori' => 'Ekstrem',
                'harga' => 30000,
                'gambar' => 'images\wahana\korakora.jpg',
            ],
        ];

        foreach ($daftarWahana as $data) {  
            Wahana::updateOrCreate(
                ['nama' => $data['nama']],
                $data
            );
        }
    }
}
