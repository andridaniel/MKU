<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKomputerHistory extends Model
{
    protected $fillable = [
        'data_komputer_id',
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

    public function dataKomputer()
    {
        return $this->belongsTo(Komputer::class);
    }

    public function monitor()
    {
        return $this->belongsTo(Barang::class, 'id_monitor');
    }

    public function keyboard()
    {
        return $this->belongsTo(Barang::class, 'id_keyboard');
    }

    public function ram()
    {
        return $this->belongsTo(Barang::class, 'id_ram');
    }

    public function prosesor()
    {
        return $this->belongsTo(Barang::class, 'id_prosesor');
    }

    public function ssd_hdd()
    {
        return $this->belongsTo(Barang::class, 'id_ssd_hdd');
    }

    public function motherboard()
    {
        return $this->belongsTo(Barang::class, 'id_motherboard');
    }

    public function lan_card()
    {
        return $this->belongsTo(Barang::class, 'id_lan_card');
    }


    
}
