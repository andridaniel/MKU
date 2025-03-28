<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komputer extends Model


{
    protected $table = 'dataKomputers';
    protected $fillable = [
        'nama_komputer',
        'ip_address',
        'sistem_operasi',
        'ruangan',
        'monitor',
        'keyboard',
        'ram',
        'processor',
        'ssd_hhd',
        'motherboard',
        'lan_card',
        'keterangan',
        'images',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];
}