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
        Schema::create('data_komputer_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_komputer_id')->constrained('data_komputer')->onDelete('cascade');
            $table->string('nama_komputer');
            $table->string('ip_address');
            $table->string('sistem_operasi');
            $table->string('ruangan');
            $table->foreignId('id_monitor');
            $table->foreignId('id_keyboard');
            $table->foreignId('id_ram');
            $table->foreignId('id_prosesor');
            $table->foreignId('id_ssd_hdd');
            $table->foreignId('id_motherboard');
            $table->foreignId('id_lan_card');
            $table->string('keterangan');
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_komputer_histories');
    }
};
