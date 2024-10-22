<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Data sebelumnya
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 5000, 'jumlah' => 1], // Pulpen Pilot
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 2, 'harga' => 3500, 'jumlah' => 1], // Pensil 2B Faber-Castell
            ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 3, 'harga' => 1000, 'jumlah' => 1], // Penghapus Karet Joyko
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 6000, 'jumlah' => 2], // Buku Tulis Sinar Dunia A5
            ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 5, 'harga' => 10000, 'jumlah' => 1], // Buku Gambar A4
            ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 6, 'harga' => 20000, 'jumlah' => 1], // Buku Binder
            ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 7, 'harga' => 15000, 'jumlah' => 1], // Stapler Max HD-10
            ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 8, 'harga' => 1500, 'jumlah' => 3],  // Isi Staples No.10
            ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 9, 'harga' => 8000, 'jumlah' => 1],  // Gunting Joyko
            ['detail_id' => 10, 'penjualan_id' => 4, 'barang_id' => 10, 'harga' => 4000, 'jumlah' => 1], // Rautan Pensil Kenko
            ['detail_id' => 11, 'penjualan_id' => 4, 'barang_id' => 11, 'harga' => 4500, 'jumlah' => 1], // Spidol Snowman
            ['detail_id' => 12, 'penjualan_id' => 4, 'barang_id' => 12, 'harga' => 8500, 'jumlah' => 1], // Highlighter Stabilo
            ['detail_id' => 13, 'penjualan_id' => 5, 'barang_id' => 13, 'harga' => 3500, 'jumlah' => 1], // Penggaris 30 cm Joyko
            ['detail_id' => 14, 'penjualan_id' => 5, 'barang_id' => 14, 'harga' => 65000, 'jumlah' => 1], // Kalkulator Casio
            ['detail_id' => 15, 'penjualan_id' => 5, 'barang_id' => 15, 'harga' => 1500, 'jumlah' => 3],  // Clip Paper Joyko
            ['detail_id' => 16, 'penjualan_id' => 6, 'barang_id' => 16, 'harga' => 2500, 'jumlah' => 4], // Lem Stick
            ['detail_id' => 17, 'penjualan_id' => 6, 'barang_id' => 17, 'harga' => 3000, 'jumlah' => 2], // Kertas Folio
            ['detail_id' => 18, 'penjualan_id' => 6, 'barang_id' => 18, 'harga' => 2000, 'jumlah' => 5], // Kertas Print
            ['detail_id' => 19, 'penjualan_id' => 7, 'barang_id' => 19, 'harga' => 12000, 'jumlah' => 1], // Map Plastik
            ['detail_id' => 20, 'penjualan_id' => 7, 'barang_id' => 20, 'harga' => 8000, 'jumlah' => 2], // Kertas Kado
            ['detail_id' => 21, 'penjualan_id' => 7, 'barang_id' => 21, 'harga' => 3500, 'jumlah' => 1], // Penjepit Kertas
            ['detail_id' => 22, 'penjualan_id' => 8, 'barang_id' => 22, 'harga' => 7000, 'jumlah' => 3], // Pensil Warna
            ['detail_id' => 23, 'penjualan_id' => 8, 'barang_id' => 23, 'harga' => 4000, 'jumlah' => 2], // Spidol Papan Putih
            ['detail_id' => 24, 'penjualan_id' => 8, 'barang_id' => 24, 'harga' => 5000, 'jumlah' => 2], // Sticky Note
            ['detail_id' => 25, 'penjualan_id' => 9, 'barang_id' => 25, 'harga' => 6000, 'jumlah' => 1], // Binder Clip
            ['detail_id' => 26, 'penjualan_id' => 9, 'barang_id' => 26, 'harga' => 9000, 'jumlah' => 1], // Tape Double Sided
            ['detail_id' => 27, 'penjualan_id' => 9, 'barang_id' => 27, 'harga' => 15000, 'jumlah' => 1], // Kertas Stiker
            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 28, 'harga' => 7500, 'jumlah' => 2], // Kertas Agenda
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 29, 'harga' => 5000, 'jumlah' => 1], // Stabilo
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 30, 'harga' => 25000, 'jumlah' => 1], // Box Penyimpanan

        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
