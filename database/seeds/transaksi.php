<?php

use Illuminate\Database\Seeder;

class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
        	'id_transaksi' => 'TT01',
        	'id_barang' => 'PD01',
        	'nama_barang' => 'AMD Ryzen 7 3700x 4.5Ghz AM4 Socket',
        	'jumlah_transaksi' => 'Jln. Pondok Candra',
        	'status' => 'Barang Masuk'
        ]);
    }
}
