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
        DB::table('data_komputer')->insert([
            'nama_komputer' => 'Asus',
            'ip_address' => '38.0.101.76',
            'sistem_operasi' => 'Windows 10',
            'ruangan' => 'Ruang IT',
            'id_monitor' => '1',
            'id_keyboard' => '1',
            'id_ram' => '1',
            'id_prosesor' => '1',
            'id_ssd_hdd' => '1',
            'id_motherboard' => '1',
            'id_lan_card' => '1',
            'keterangan' => 'Asus',
            'images' => 'Asus',
        ]);
    }
}
