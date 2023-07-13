<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penjualjenis extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'jenis_barang' => 'Alat Musik'
        ]);

        DB::table('jenis')->insert([
            'jenis_barang' => 'Alat Mandi'
        ]);

        DB::table('jenis')->insert([
            'jenis_barang' => 'Alat Olahraga'
        ]);

        DB::table('penjual')->insert([
            'nama_pemesan' => 'Rafli Petir',
            'jenis_barang' => '1',
            'harga_barang' => 'Rp.45.000',
            'alamat' => 'Cimahi',
        ]);

        DB::table('penjual')->insert([
            'nama_pemesan' => 'Marcel Bonkop',
            'jenis_barang' => '2',
            'harga_barang' => 'Rp.4.000',
            'alamat' => 'Bonkop',
        ]);

        DB::table('penjual')->insert([
            'nama_pemesan' => 'Ucok Baba',
            'jenis_barang' => '3',
            'harga_barang' => 'Rp.95.000',
            'alamat' => 'Cimindi',
        ]);
    }
}
