<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'TV LED 32 Inch', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG002', 'barang_nama' => 'Kulkas 2 Pintu', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 3, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG003', 'barang_nama' => 'Mesin Cuci', 'harga_beli' => 2500000, 'harga_jual' => 2800000],
            ['barang_id' => 4, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG004', 'barang_nama' => 'Kipas Angin', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 5, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'BRG005', 'barang_nama' => 'Setrika Listrik', 'harga_beli' => 100000, 'harga_jual' => 150000],

            ['barang_id' => 6, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG006', 'barang_nama' => 'Kemeja Pria', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 7, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 8, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG008', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 30000, 'harga_jual' => 50000],
            ['barang_id' => 9, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG009', 'barang_nama' => 'Jaket Parasut', 'harga_beli' => 120000, 'harga_jual' => 180000],
            ['barang_id' => 10, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'BRG010', 'barang_nama' => 'Topi Baseball', 'harga_beli' => 20000, 'harga_jual' => 35000],

            ['barang_id' => 11, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG011', 'barang_nama' => 'Roti Gandum', 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_id' => 12, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'BRG012', 'barang_nama' => 'Biskuit Cokelat', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 13, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Air Mineral 600ml', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 14, 'kategori_id' => 4, 'supplier_id' => 3, 'barang_kode' => 'BRG014', 'barang_nama' => 'Teh Manis Botol', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 15, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'BRG015', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 4000, 'harga_jual' => 6000],
        ];

        DB::table('m_barang')->insert($data);
    }
}