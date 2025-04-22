<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('buku')->insert([
            ['judul' => 'Laskar Pelangi', 'pengarang' => 'Andrea Hirata', 'penerbit' => 'Bentang Pustaka', 'tahun_terbit' => 2005],
            ['judul' => 'Bumi Manusia', 'pengarang' => 'Pramoedya Ananta Toer', 'penerbit' => 'Lentera Dipantara', 'tahun_terbit' => 1980],
            ['judul' => 'Filosofi Teras', 'pengarang' => 'Henry Manampiring', 'penerbit' => 'Kompas', 'tahun_terbit' => 2018],
        ]);
    }
}
