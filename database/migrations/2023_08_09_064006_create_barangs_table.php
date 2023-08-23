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
        Schema::create('barang', function (Blueprint $table) {
           $table->integer('id_barang',true);
           $table->integer('id_cabang',false)->index('idCabang');
           $table->string('nama_barang',100)->nullable(false);
           #$table->decimal('stok',8,0)->default(0)->nullable(false);
           #$table->decimal('harga',8,0)->default(0)->nullable(false);
           $table->integer('harga',false)->nullable(false);
           $table->integer('stok',false)->nullable(false);
           //Foreign 
           $table->foreign('id_cabang')
                ->references('id_cabang')->on('cabang')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
