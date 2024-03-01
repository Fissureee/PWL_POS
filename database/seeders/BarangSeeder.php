<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'nama_barang' => 'Laptop Asus',
                'harga_beli' => 2500000,
                'harga_jual' => 3500000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'BRG002',
                'nama_barang' => 'Smartphone Samsung',
                'harga_beli' => 2000000,
                'harga_jual' => 3000000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 3,
                'barang_kode' => 'BRG003',
                'nama_barang' => 'Tablet Lenovo',
                'harga_beli' => 1500000,
                'harga_jual' => 2500000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
