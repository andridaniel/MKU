<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Komputer;

class BarangController extends Controller
{
    public function createBarang()
    {
        return view ('createBarang');
    }

    public function storeBarang(Request $request)
    {
        $dataBarang = $request->validate([
            'kode_brg' => 'required|string|max:255',
            'nama_brg' => 'required|string|max:255',
            'jns_brg' =>  'required|string|max:255',
        ]);


        Barang::create($dataBarang);

        return redirect()->route('createBarang')->with('success', 'Data Barang Berhasil Ditambahkan.');
    }


    public function showBarang ()
    {
        $dataBarang = Barang::all();
        return view ('createBarang', compact('dataBarang'));
    }
}
