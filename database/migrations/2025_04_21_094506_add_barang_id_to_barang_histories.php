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
        Schema::table('barang_histories', function (Blueprint $table) {
            $table->unsignedBigInteger('barang_id')->nullable()->after('id');
            $table->unsignedBigInteger('user_id')->nullable()->after('barang_id');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('set null');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('barang_histories', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('barang_id');
        });
    }
};
