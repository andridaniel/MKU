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
        Schema::create('dataKomputers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_komputer');
            $table->string('ip_address');
            $table->string('sistem_operasi');
            $table->string('ruangan');
            $table->string('monitor');
            $table->string('keyboard');
            $table->string('ram');
            $table->string('prosesor');
            $table->string('ssd_hhd');
            $table->string('motherboard');
            $table->string('lan_card');
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
        //
    }
};
