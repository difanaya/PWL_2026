<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $detailId = 1;
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $barangRandom = DB::table('m_barang')->where('barang_id', $j)->first();
                DB::table('t_penjualan_detail')->insert([
                    'detail_id' => $detailId,
                    'penjualan_id' => $i,
                    'barang_id' => $barangRandom->barang_id,
                    'jumlah' => rand(1, 5),
                    'harga' => $barangRandom->harga_jual,
                ]);
                $detailId++;
            }
        }
    }
}