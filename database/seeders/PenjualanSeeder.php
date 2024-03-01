<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Buyer',
                'penjualan_kode' => '01239',
                'penjualan_tanggal' => '2024-01-01'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Another Buyer',
                'penjualan_kode' => '01240',
                'penjualan_tanggal' => '2024-01-02'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Yet Another Buyer',
                'penjualan_kode' => '01241',
                'penjualan_tanggal' => '2024-01-03'
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
