<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komputer extends Model


{
    protected $table = 'data_komputer';
    protected $fillable = [
        'nama_komputer',
        'ip_address',
        'sistem_operasi',
        'ruangan',
        'id_monitor',
        'id_keyboard',
        'id_ram',
        'id_prosesor',
        'id_ssd_hdd',
        'id_motherboard',
        'id_lan_card',
        'keterangan',
        'images',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
