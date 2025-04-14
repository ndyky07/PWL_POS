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
        Schema::create(table: 't_penjualan', callback: function (Blueprint $table): void {
            $table->id(column: 'penjualan_id');
            $table->unsignedBigInteger(column: 'user_id');
            $table->string(column: 'pembeli', length: 50);
            $table->string(column: 'penjualan_kode', length: 20)->unique();
            $table->dateTime(column: 'penjualan_tanggal');
            $table->timestamps();

            $table->foreign(columns: 'user_id')->references(columns: 'user_id')->on(table: 'm_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table: 't_penjualan');
    }
};