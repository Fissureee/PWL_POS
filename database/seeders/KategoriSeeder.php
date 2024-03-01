<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => '009230', 'kategori_nama'=> 'Air Mineral'],
            ['kategori_id' => 2, 'kategori_kode' => '009231', 'kategori_nama' => 'Minuman Bersoda'],
            ['kategori_id' => 3, 'kategori_kode' => '009232', 'kategori_nama' => 'Minuman Energi']
        ];
        DB::table('m_kategori')->insert($data);
    }
}
