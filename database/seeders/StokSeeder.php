<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1290,
                'user_id' => 1,
                'stok_tanggal' => '2003-01-01',
                'stok_jumlah' => 3
            ],
            [
                'stok_id' => 2,
                'barang_id' => 1291,
                'user_id' => 2,
                'stok_tanggal' => '2003-01-02',
                'stok_jumlah' => 5
            ],
            [
                'stok_id' => 3,
                'barang_id' => 1292,
                'user_id' => 3,
                'stok_tanggal' => '2003-01-03',
                'stok_jumlah' => 7
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
