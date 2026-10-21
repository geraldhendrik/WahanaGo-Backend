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
            ],
            [
                'nama' => 'Bianglala',
                'kategori' => 'Santai',
                'harga' => 25000,
            ],
            [
                'nama' => 'Rumah Hantu',
                'kategori' => 'Petualangan',
                'harga' => 35000,
            ],
            [
                'nama' => 'Komidi Putar',
                'kategori' => 'Santai',
                'harga' => 20000,
            ],
            [
                'nama' => 'Drop Tower',
                'kategori' => 'Ekstrem',
                'harga' => 40000,
            ],
            [
                'nama' => 'Kora-Kora',
                'kategori' => 'Ekstrem',
                'harga' => 30000,
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
