<?php

use Illuminate\Database\Seeder;

class gudang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gudangs')->insert([
        	'id_gudang' => 'WW01',
        	'nama_gudang' => 'Gudang Barang Komputer'
        ]);
    }
}
