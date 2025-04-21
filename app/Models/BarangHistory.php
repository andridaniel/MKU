<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangHistory extends Model
{
    protected $fillable = [
       'barang_id',
       'user_id',
       'kode_brg',
       'nama_brg',
       'jns_brg',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
