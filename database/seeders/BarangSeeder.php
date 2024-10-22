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
                'barang_kode' => 'ATK1', 
                'barang_nama' => 'Pulpen Pilot',
                'harga_beli' => 3000,
                'harga_jual' => 5000,
            ],
            [
                'barang_id' => 2, 
                'kategori_id' => 1, 
                'barang_kode' => 'ATK2', 
                'barang_nama' => 'Pensil 2B Faber-Castell',
                'harga_beli' => 2000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 3, 
                'kategori_id' => 1, 
                'barang_kode' => 'ATK3', 
                'barang_nama' => 'Penghapus Karet Joyko',
                'harga_beli' => 500,
                'harga_jual' => 1000,
            ],
            [
                'barang_id' => 4, 
                'kategori_id' => 2, 
                'barang_kode' => 'ATK4', 
                'barang_nama' => 'Buku Tulis Sinar Dunia A5',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 5, 
                'kategori_id' => 2, 
                'barang_kode' => 'ATK5', 
                'barang_nama' => 'Buku Gambar A4',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
            ],
            [
                'barang_id' => 6, 
                'kategori_id' => 2, 
                'barang_kode' => 'ATK6', 
                'barang_nama' => 'Buku Binder',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
            [
                'barang_id' => 7, 
                'kategori_id' => 3, 
                'barang_kode' => 'ATK7', 
                'barang_nama' => 'Stapler Max HD-10',
                'harga_beli' => 12000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 8, 
                'kategori_id' => 3, 
                'barang_kode' => 'ATK8', 
                'barang_nama' => 'Isi Staples No.10',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
            [
                'barang_id' => 9, 
                'kategori_id' => 3, 
                'barang_kode' => 'ATK9', 
                'barang_nama' => 'Gunting Joyko',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
            ],
            [
                'barang_id' => 10, 
                'kategori_id' => 4, 
                'barang_kode' => 'ATK10', 
                'barang_nama' => 'Rautan Pensil Kenko',
                'harga_beli' => 2500,
                'harga_jual' => 4000,
            ],
            [
                'barang_id' => 11, 
                'kategori_id' => 4, 
                'barang_kode' => 'ATK11', 
                'barang_nama' => 'Spidol Snowman',
                'harga_beli' => 3000,
                'harga_jual' => 4500,
            ],
            [
                'barang_id' => 12, 
                'kategori_id' => 4, 
                'barang_kode' => 'ATK12', 
                'barang_nama' => 'Highlighter Stabilo',
                'harga_beli' => 6000,
                'harga_jual' => 8500,
            ],
            [
                'barang_id' => 13, 
                'kategori_id' => 5, 
                'barang_kode' => 'ATK13', 
                'barang_nama' => 'Penggaris 30 cm Joyko',
                'harga_beli' => 2000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 14, 
                'kategori_id' => 5, 
                'barang_kode' => 'ATK14', 
                'barang_nama' => 'Kalkulator Casio',
                'harga_beli' => 50000,
                'harga_jual' => 65000,
            ],
            [
                'barang_id' => 15, 
                'kategori_id' => 5, 
                'barang_kode' => 'ATK15', 
                'barang_nama' => 'Clip Paper Joyko',
                'harga_beli' => 1000,
                'harga_jual' => 1500,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
