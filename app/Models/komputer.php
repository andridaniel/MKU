<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

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
        'id_mouse',
        'id_ram',
        'id_prosesor',
        'id_ssd_hdd',
        'id_motherboard',
        'id_lan_card',
        'keterangan',
        'status',
        'images',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_monitor');
    }

    public function histories()
    {
        return $this->hasMany(DataKomputerHistory::class, 'data_komputer_id');
    }


    public function monitor()
    {
        return $this->belongsTo(Barang::class, 'id_monitor');
    }

    public function keyboard()
    {
        return $this->belongsTo(Barang::class, 'id_keyboard');
    }

    public function mouse()
    {
        return $this->belongsTo(Barang::class, 'id_mouse');
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

    public function lan_Card()
    {
        return $this->belongsTo(Barang::class, 'id_lan_card');
    }



    protected static function booted()
    {
        static::creating(function ($data_komputer) {
            $data_komputer->slug = Str::slug($data_komputer->nama_komputer . '-' . uniqid());
        });

        // static::updating(function ($data_komputer) {
        //     $data_komputer->slug = Str::slug($data_komputer->nama_komputer . '-' . uniqid());
        // });
    }


}
