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
        Schema::create(table: 't_stok', callback: function (Blueprint $table): void {
            $table->id(column: 'stok_id');
            $table->unsignedBigInteger(column: 'barang_id');
            $table->unsignedBigInteger(column: 'user_id');
            $table->dateTime(column: 'stok_tanggal');
            $table->integer(column: 'stok_jumlah');
            $table->timestamps();

            $table->foreign(columns: 'barang_id')->references(columns: 'barang_id')->on(table: 'm_barang');
            $table->foreign(columns: 'user_id')->references(columns: 'user_id')->on(table: 'm_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 't_stok');
    }
};