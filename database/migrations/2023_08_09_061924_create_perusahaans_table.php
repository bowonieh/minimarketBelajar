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
        Schema::create('perusahaan', function (Blueprint $table) {
            #$table->id();
            #$table->timestamps();
            $table->integer('id_perusahaan')->autoIncrement();
            $table->string('nama_perusahaan',100)->nullable(false);
            $table->string('npwp',30)->nullable(false);
            $table->text('alamat')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
