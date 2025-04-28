<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $fillable = [
        'kode_brg', 
        'nama_brg', 
        'jns_brg',
    ];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Barang.php
    public function histories()
    {
        return $this->hasMany(BarangHistory::class);
    }


    protected static function booted()
    {
        static::creating(function ($barang) {
            $barang->slug = Str::slug($barang->nama_brg . '-' . uniqid());
        });

        // static::updating(function ($barang) {
        //     $barang->slug = Str::slug($barang->nama_brg . '-' . uniqid());
        // });
    }

}
