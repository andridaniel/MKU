<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class komputer extends Model
{
    protected $fillable = [
        'nama_komputer',
        'ip_address',
        'sistem_operasi',
        'ruangan',
        'monitor',
        'keyboard',
        'ram',
        'prosesor',
        'ssd_hhd',
        'motherboard',
        'lan_card',
        'keterangan',
        'images',
    ];
}
