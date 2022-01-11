<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'nama_barang' => 'Indomie Goreng',
            'keterangan' => 'Indomie goreng dengan rasa original',
            'harga' => '3000',
            'stok' => 100,
            'barang_image' => '/storage/images/indomie_goreng.jpg'
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => 'Indomie Kuah Kari Ayam',
            'keterangan' => 'Indomie kuah dengan rasa kari ayam',
            'harga' => '3000',
            'stok' => 100,
            'barang_image' => '/storage/images/indomie_kari.jpg'
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => 'Minyak Goreng',
            'keterangan' => 'Minyak goreng asli berukuran 2 L',
            'harga' => '40000',
            'stok' => 100,
            'barang_image' => '/storage/images/minyak_goreng.jpg'
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => 'Rinso Bubuk',
            'keterangan' => 'Rinso bubuk dengan berat 770 gr',
            'harga' => '20000',
            'stok' => 100,
            'barang_image' => '/storage/images/rinso_bubuk.jpg'
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => 'Rinso Cair',
            'keterangan' => 'Rinso cair dengan ukuran 1 L',
            'harga' => '30000',
            'stok' => 100,
            'barang_image' => '/storage/images/rinso_cair.jpg'
        ]);

        DB::table('barangs')->insert([
            'nama_barang' => 'Sunlight',
            'keterangan' => 'Sabun cuci piring',
            'harga' => '15000',
            'stok' => 100,
            'barang_image' => '/storage/images/sunlight.jpg'
        ]);
    }
}
