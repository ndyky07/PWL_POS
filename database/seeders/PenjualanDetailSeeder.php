<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            for ($j = 1; $j <= 3; $j++) { // 3 barang per transaksi
                $barang_id = rand(min: 1, max: 10);
                $barang = DB::table(table: 'm_barang')->where(column: 'barang_id', operator: $barang_id)->first();

                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $barang->harga_jual,
                    'jumlah' => rand(min: 1, max: 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}