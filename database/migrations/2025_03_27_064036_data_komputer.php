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
        Schema::create('data_komputer', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komputer');
            $table->string('ip_address');
            $table->string('sistem_operasi');
            $table->string('ruangan');
            $table->foreignId('id_monitor')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_keyboard')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_mouse')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_ram')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_prosesor')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_ssd_hdd')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_motherboard')->constrained('barangs')->onDelete('cascade');
            $table->foreignId('id_lan_card')->constrained('barangs')->onDelete('cascade');
            $table->string('keterangan');
            $table->string('status');
            $table->string('images');
            $table->timestamps();

        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_komputer');
    }
};
