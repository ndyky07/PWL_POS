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
        Schema::create(table: 't_penjualan_detail', callback: function (Blueprint $table): void {
            $table->id(column: 'detail_id');
            $table->unsignedBigInteger(column: 'penjualan_id');
            $table->unsignedBigInteger(column: 'barang_id');
            $table->integer(column: 'harga');
            $table->integer(column: 'jumlah');
            $table->timestamps();

            $table->foreign(columns: 'penjualan_id')->references(columns: 'penjualan_id')->on(table: 't_penjualan');
            $table->foreign(columns: 'barang_id')->references(columns: 'barang_id')->on(table: 'm_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 't_penjualan_detail');
    }
};