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
        Schema::create('kasir', function (Blueprint $table) {
            $table->id('kd_kasir');
            $table->integer('id_cabang',false)->nullable(false)->index('kasirIdCabang');
            $table->string('nama',100)->nullable(false);
            $table->text('alamat')->nullable(false);
            #foreign key
            $table->foreign('id_cabang')->references('id_cabang')->on('cabang')
                    ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasir');
    }
};
