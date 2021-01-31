<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(barang::class);
    	$this->call(gudang::class);
    	$this->call(satuan::class);
    	$this->call(supplier::class);
    	$this->call(transaksi::class);
    }
}
