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


    public function deleteBarang($id)
    {
        $dataBarang = Barang::find($id);
        $dataBarang->delete();
        return redirect()->route('createBarang')->with('success', 'Data Barang Berhasil Dihapus.');
    }

    public function updateBarang($id)
    {
        $dataBarang = Barang::find($id);
        $Barang = Barang::all();
        return view ('updateBarang', compact('dataBarang','Barang'));
    }


    public function editBarang(Request $request, $id){
        $validatedData = $request->validate([
        'kode_brg'  => 'required|string|max:255',
        'nama_brg'  => 'required|string|max:255',
        'jns_brg'   => 'required|string|max:255',
        ]);

        $barang = Barang::findOrFail($id);

        $barang->update($validatedData);

        return redirect()->route('updateBarang', ['id' => $id])->with('success', 'Data Barang Berhasil Di UPDATE.');
    }
}
