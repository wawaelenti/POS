<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Supplier 1 (Barang 1-5)
            ['supplier_id' => 1, 'barang_id' => 1, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 2, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 3, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 4, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 1, 'barang_id' => 5, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 150, 'created_at' => now(), 'updated_at' => now()],

            // Supplier 2 (Barang 6-10)
            ['supplier_id' => 2, 'barang_id' => 6, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 7, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 8, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 9, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'barang_id' => 10, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 100, 'created_at' => now(), 'updated_at' => now()],

            // Supplier 3 (Barang 11-15)
            ['supplier_id' => 3, 'barang_id' => 11, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 12, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 13, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 14, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'barang_id' => 15, 'user_id' => 3, 'stock_tangal' => now(), 'stock_jumlah' => 50, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('t_stock')->insert($data);
    }
}