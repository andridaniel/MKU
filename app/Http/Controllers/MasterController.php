<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataKomputer;


class MasterController extends Controller
{
    public function dataKomputer()
    {
        return view('dataKomputer');
    }

    public function detailKomputer()
    {
        return view('detailKomputer');
    }

    public function updateData()
    {
        return view('updateData');
    }

    public function createData()
    {
        return view('createData');
    }

   public function storeData(Request $request)
   {
      // Validasi data
    $validatedData = $request->validate([
        'nama_komputer'  => 'required|string|max:255',
        'ip_address'     => 'required|ip',
        'sistem_operasi' => 'required|string|max:255',
        'ruangan'        => 'required|string|max:255',
        'monitor'        => 'required|string|max:255',
        'keyboard'       => 'required|string|max:255',
        'ram'            => 'required|string|max:255',
        'prosesor'       => 'required|string|max:255',
        'ssd_hhd'        => 'required|string|max:255',
        'motherboard'    => 'required|string|max:255',
        'lan_card'       => 'required|string|max:255',
        'keterangan'     => 'nullable|string',
        'images'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);


    // Simpan gambar jika ada
    if ($request->hasFile('images')) {
        $imagePath = $request->file('images')->store('uploads', 'public');
        $validatedData['images'] = $imagePath;
    }

    // Simpan data ke database
    Komputer::create($validatedData);

    return redirect()->route('dataKomputer')->with('success', 'Data berhasil disimpan!');

   }

}
