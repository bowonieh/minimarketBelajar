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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->integer('id_barang_masuk', true)->nullable(false);
            $table->integer('id_barang', false)->index('idBarangMasuk')->nullable(false);
            $table->integer('id_cabang', false)->index('idCabangMasuk')->nullable(false);
            $table->date('tanggal')->nullable(false)->default('2022-01-01');
            $table->text('dokumen')->nullable(true);
            $table->integer('jumlah')->nullable(false)->default(0);
            //Foreign Key
            $table->foreign('id_barang')->on('barang')
                ->references('id_barang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cabang')->on('cabang')
                ->references('id_cabang')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
