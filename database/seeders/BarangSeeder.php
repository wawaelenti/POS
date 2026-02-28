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
            // Supplier 1 
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Mie Sedaap Goreng', 'harga_beli' => 2600, 'harga_jual' => 3100],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Sarimi Gelas', 'harga_beli' => 1500, 'harga_jual' => 2000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Qtela Singkong', 'harga_beli' => 7500, 'harga_jual' => 9500],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG004', 'barang_nama' => 'Milo Kaleng', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'BRG005', 'barang_nama' => 'Ultra Milk 250ml', 'harga_beli' => 5500, 'harga_jual' => 7000],

            // Supplier 2 
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG006', 'barang_nama' => 'Kahf Face Wash', 'harga_beli' => 32000, 'harga_jual' => 38000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'BRG007', 'barang_nama' => 'Make Over Lip Cream', 'harga_beli' => 85000, 'harga_jual' => 105000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Emina Sunscreen', 'harga_beli' => 25000, 'harga_jual' => 32000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Kemeja Flanel L/S', 'harga_beli' => 120000, 'harga_jual' => 155000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'BRG010', 'barang_nama' => 'Kaos Polos Cotton', 'harga_beli' => 45000, 'harga_jual' => 60000],

            // Supplier 3 
            ['barang_id' => 11, 'kategori_id' => 5, 'barang_kode' => 'BRG011', 'barang_nama' => 'LG LED TV 32 Inch', 'harga_beli' => 1950000, 'harga_jual' => 2200000],
            ['barang_id' => 12, 'kategori_id' => 5, 'barang_kode' => 'BRG012', 'barang_nama' => 'Miyako Magic Com', 'harga_beli' => 280000, 'harga_jual' => 350000],
            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'BRG013', 'barang_nama' => 'Cosmos Blender', 'harga_beli' => 250000, 'harga_jual' => 320000],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'BRG014', 'barang_nama' => 'Razer Gaming Mouse', 'harga_beli' => 450000, 'harga_jual' => 550000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'JBL Bluetooth Speaker', 'harga_beli' => 600000, 'harga_jual' => 750000],
        ];

        DB::table('m_barang')->insert($data);
    }
}