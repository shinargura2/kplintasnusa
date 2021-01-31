<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
        	'id_barang' => 'PD01',
        	'nama_barang' => 'AMD Ryzen 7 3700x 4.5Ghz AM4 Socket',
        	'jumlah_barang' => '2',	
        	'nama_pemasok' => 'PT Alfa Artha Adayana',
        	'id_gudang' => 'WW01',
        	'satuan' => 'Kilogram'
        ]);
    }
}
