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
           $table->bigInteger('barcode')->nullable(false);
           $table->string('nama_barang',100)->nullable(false);
           $table->text('foto_barang')->nullable(true);
           #$table->decimal('stok',8,0)->default(0)->nullable(false);
           #$table->decimal('harga',8,0)->default(0)->nullable(false);
          
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
