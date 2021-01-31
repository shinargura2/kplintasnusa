<?php

use Illuminate\Database\Seeder;

class satuan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('satuans')->insert([
        	'id_satuan' => 'S01',
        	'satuan' => 'Kilogram'
        ]);
    }
}
