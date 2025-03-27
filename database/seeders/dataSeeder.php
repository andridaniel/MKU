<?php

namespace Database\Seeders;

use App\Models\komputer;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class dataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dataKomputers')->insert([
            'nama_komputer' => 'Asus',
            'ip_address' => '38.0.101.76',
            'sistem_operasi' => 'Windows 10',
            'ruangan' => 'Ruang IT',
            'monitor' => 'Asus',
            'keyboard' => 'Asus',
            'ram' => 'Asus',
            'prosesor' => 'Asus',
            'ssd_hhd' => 'Asus',
            'motherboard' => 'Asus',
            'lan_card' => 'Asus',
            'keterangan' => 'Asus',
            'images' => 'Asus',
        ]);
    }
}
