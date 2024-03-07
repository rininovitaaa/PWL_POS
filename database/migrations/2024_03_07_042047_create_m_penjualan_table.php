<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_penjualan', function (Blueprint $table) {
          $table->id('penjualan_id');
          $table->unsignedBigInteger('user_id')->index();
          $table-> string('pembeli', 50);
          $table-> string('penjualan_code', 20);
          $table-> dateTime('penjualan_tanggal');
          $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_penjualan', function (Blueprint $table) {
            //
        });
    }
};
