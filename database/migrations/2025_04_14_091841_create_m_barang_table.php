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
        Schema::create(table: 'm_barang', callback: function (Blueprint $table): void {
            $table->id(column: 'barang_id');
            $table->unsignedBigInteger(column: 'kategori_id');
            $table->string(column: 'barang_kode', length: 10)->unique();
            $table->string(column: 'barang_nama', length: 100);
            $table->integer(column: 'harga_beli');
            $table->integer(column: 'harga_jual');
            $table->timestamps();

            $table->foreign(columns: 'kategori_id')->references(columns: 'kategori_id')->on(table: 'm_kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 'm_barang');
    }
};