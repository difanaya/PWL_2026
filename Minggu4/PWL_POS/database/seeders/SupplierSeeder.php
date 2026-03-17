<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SPL01', 'supplier_nama' => 'PT Maju Bersama', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SPL02', 'supplier_nama' => 'CV Sumber Makmur', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SPL03', 'supplier_nama' => 'Toko Serba Ada', 'supplier_alamat' => 'Bandung'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}