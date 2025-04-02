<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('barangs')->insert([
            'kode_brg' => 'B001',
            'nama_brg' => 'Monitor 19 inch',
            'jns_brg' => 'Monitor',
        ]);

        DB::table('barangs')->insert([
            'kode_brg' => 'B002',
            'nama_brg' => 'Monitor 21 inch',
            'jns_brg' => 'Monitor',
        ]);
    }
}
