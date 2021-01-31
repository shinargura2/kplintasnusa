<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id_transaksi')->primary();
            $table->string('id_barang');
            $table->string('nama_barang');
            $table->string('jumlah_transaksi');
            $table->string('status');
            $table->timestamps();

             
            
            $table->foreign('id_barang')
                ->references('id_barang')
                ->on('barangs');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
