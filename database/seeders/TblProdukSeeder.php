<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TblProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \DB::table('tbl_produks')->insert([
            ['nama_produk' => 'Sabun Lifeboy', 'harga_jual' => 2000, 'harga_beli' => 1000],
            ['nama_produk' => 'Shampoo Sunsilk', 'harga_jual' => 4000, ' harga_beli' => 8000]
        ]);
    }
}
