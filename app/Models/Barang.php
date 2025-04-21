<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

}
