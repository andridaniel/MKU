<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komputer;


class MasterController extends Controller
{
    public function dataKomputer()
    {
        return view('dataKomputer');
    }

    public function detailKomputer($id)
    {
        $detailKomputer= Komputer::findOrFail($id);

        return view('detailKomputer', compact('detailKomputer'));
    }

    public function updateData()
    {
        return view('updateData');
    }

    public function createData()
    {
        return view('createData');
    }

// Menabahkan Data
    public function storeData(Request $request)
   {
      // Validasi data
    $validatedData = $request->validate([
        'nama_komputer'  => 'required|string|max:255',
        'ip_address'     => 'required|string|max:255',
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
        'images'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


    // Simpan gambar jika ada
    if ($request->hasFile('images')) {
        $image = $request->file('images');

        // Simpan gambar ke folder 'public/images' yang ada di root Laravel
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);

        // Simpan nama file ke database
        $validatedData['images'] = 'images/' . $imageName;
    }


    // Simpan data ke database
    Komputer::create($validatedData);

    return redirect()->route('dataKomputer')->with('success', 'Data komputer berhasil disimpan.');

   }

//    Menampilkan Data
    public function showData()
    {
        $data = Komputer::all();
        return view('dataKomputer', compact('data'));


    }

//    Menghapus Data
    public function deleteData($id)
    {
        $data = Komputer::find($id);
        $data->delete();
        return redirect()->route('dataKomputer')->with('success', 'Data berhasil dihapus');
    }
}
