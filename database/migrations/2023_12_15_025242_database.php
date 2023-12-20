<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('input_data', function (Blueprint $table) {
            $table->increments('barang_id');
            $table->integer('no_barang');
            $table->string('nama_barang');
            $table->string('jenis_varian');
            $table->date('tanggalKadaluarsa');
            $table->date('tanggalProduksi');
            $table->integer('harga_beli');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('input_data');
    }
};
