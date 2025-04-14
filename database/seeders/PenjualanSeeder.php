<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id' => rand(min: 1, max: 3), // Kasir yang berbeda
                'pembeli' => 'Customer ' . $i,
                'penjualan_kode' => 'TRX00' . $i,
                'penjualan_tanggal' => Carbon::now()->subDays(value: rand(min: 1, max: 30)),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}