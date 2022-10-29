<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class daftar_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daftar_barang')->insert([
            ['NamaBarang' => 'sampo', 'HargaBarang' => 5000],
            ['NamaBarang' => 'sabun', 'HargaBarang' => 2000],
            ['NamaBarang' => 'pasta gigi', 'HargaBarang' => 6000],
            ['NamaBarang' => 'lotion', 'HargaBarang' => 20000],
            ['NamaBarang' => 'parfume', 'HargaBarang' => 12000],
        ]);
    }
}
