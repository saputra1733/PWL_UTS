<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1, 
                'supplier_kode' => 'S1', 
                'supplier_nama' => 'PT Alat Tulis Prima',
                'supplier_alamat' => 'Jl. Stationery No 1',
            ],
            [
                'supplier_id' => 4, 
                'supplier_kode' => 'S4',
                'supplier_nama' => 'PT Kantor Jaya',
                'supplier_alamat' => 'Jl. Kantor No 4',
            ],
            [
                'supplier_id' => 5, 
                'supplier_kode' => 'S5',
                'supplier_nama' => 'CV Aksesoris Modern',
                'supplier_alamat' => 'Jl. Aksesoris No 5',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}