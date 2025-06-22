<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('tb_product', function (Blueprint $table) {
            $table->bigIncrements('id_product'); // Lebih eksplisit dari $table->id('id_product');
            $table->string('name');
            $table->text('desc');
            $table->string('img')->nullable();   // Kalau image bisa kosong
            $table->string('bg')->nullable();
            $table->string('color')->nullable();
            $table->string('btn')->nullable();
            $table->string('price');
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Undo migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_product');
    }
};
