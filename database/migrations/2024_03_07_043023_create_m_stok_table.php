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
        Schema::create('m_stok', function (Blueprint $table) {
            $table-> id('stok_id');
            $table-> unsignedInteger('barang_id')-> index();
            $table-> unsignedBigInteger('user_id')-> index();
            $table->  dateTime('stok_tanggal');
            $table-> integer('stok_jumlah');
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_stok', function (Blueprint $table) {
            //
        });
    }
};
