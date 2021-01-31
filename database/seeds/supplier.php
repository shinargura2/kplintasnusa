<?php

use Illuminate\Database\Seeder;

class supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemasoks')->insert([
        	'id_pemasok' => 'SP01',
        	'nama_pemasok' => 'PT Alfa Artha Adayana',
        	'email' => 'alfaaaa@gmail.com',
        	'alamat' => 'Jln. Pondok Candra'
        ]);
    }
}
