<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1, 
                'barang_id' => 1, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 100, // Pulpen Pilot
            ],
            [
                'stok_id' => 2, 
                'barang_id' => 2, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 150, // Pensil 2B Faber-Castell
            ],
            [
                'stok_id' => 3, 
                'barang_id' => 3, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 200, // Penghapus Karet Joyko
            ],
            [
                'stok_id' => 4, 
                'barang_id' => 4, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 80, // Buku Tulis Sinar Dunia A5
            ],
            [
                'stok_id' => 5, 
                'barang_id' => 5, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 50, // Buku Gambar A4
            ],
            [
                'stok_id' => 6, 
                'barang_id' => 6, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 40, // Buku Binder
            ],
            [
                'stok_id' => 7, 
                'barang_id' => 7, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 70, // Stapler Max HD-10
            ],
            [
                'stok_id' => 8, 
                'barang_id' => 8, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 500, // Isi Staples No.10
            ],
            [
                'stok_id' => 9, 
                'barang_id' => 9, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 120, // Gunting Joyko
            ],
            [
                'stok_id' => 10, 
                'barang_id' => 10, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 100, // Rautan Pensil Kenko
            ],
            [
                'stok_id' => 11, 
                'barang_id' => 11, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 90, // Spidol Snowman
            ],
            [
                'stok_id' => 12, 
                'barang_id' => 12, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 60, // Highlighter Stabilo
            ],
            [
                'stok_id' => 13, 
                'barang_id' => 13, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 150, // Penggaris 30 cm Joyko
            ],
            [
                'stok_id' => 14, 
                'barang_id' => 14, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 30, // Kalkulator Casio
            ],
            [
                'stok_id' => 15, 
                'barang_id' => 15, 
                'user_id' => 3, 
                'stok_tanggal' => '2024-01-11',
                'stok_jumlah' => 250, // Clip Paper Joyko
            ],
        ];
    DB::table('t_stok')->insert($data);
    }
}
