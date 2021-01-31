<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->string('id_barang')->primary();
            $table->string('nama_barang');
            $table->integer('jumlah_barang');

            //TABEL YANG ADA RELASI
            $table->string('nama_pemasok');
            $table->string('id_gudang');
            $table->string('satuan');
        
            //foreign buat supplier
            $table->foreign('id_gudang')
                ->references('id_gudang')
                ->on('gudangs');

          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
