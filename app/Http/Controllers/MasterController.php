<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komputer;
use App\Models\Barang;


class MasterController extends Controller
{
    public function dataKomputer()
    {
        return view('dataKomputer');
    }

    public function detailKomputer($id)
    {
        $detailKomputer= Komputer::findOrFail($id);
        $monitor = Barang::find($detailKomputer->id_monitor);
        $keyboard = Barang::find($detailKomputer->id_keyboard);
        $ram = Barang::find($detailKomputer->id_ram);
        $prosesor = Barang::find($detailKomputer->id_prosesor);
        $ssd_hdd = Barang::find($detailKomputer->id_ssd_hdd);
        $motherboard = Barang::find($detailKomputer->id_motherboard);
        $lan_card = Barang::find($detailKomputer->id_lan_card);

        return view('detailKomputer', compact('detailKomputer', 'monitor', 'keyboard', 'ram', 'prosesor', 'ssd_hdd', 'motherboard', 'lan_card'));
    }


    public function createData()
    {
        $monitor = Barang::where('jns_brg', 'Monitor')->get();
        $keyboard = Barang::where('jns_brg', 'Keyboard')->get();
        $ram = Barang::where('jns_brg', 'Ram')->get();
        $prosesor = Barang::where('jns_brg', 'Prosesor')->get();
        $ssd_hdd = Barang::where('jns_brg', 'SSD/HDD')->get();
        $motherboard = Barang::where('jns_brg', 'Motherboard')->get();
        $lan_card = Barang::where('jns_brg', 'Lan Card')->get();

        return view('createData', compact('monitor', 'keyboard', 'ram', 'prosesor', 'ssd_hdd', 'motherboard', 'lan_card'));
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
        'id_monitor'        => 'required|string|max:255',
        'id_keyboard'       => 'required|string|max:255',
        'id_ram'            => 'required|string|max:255',
        'id_prosesor'       => 'required|string|max:255',
        'id_ssd_hdd'        => 'required|string|max:255',
        'id_motherboard'    => 'required|string|max:255',
        'id_lan_card'       => 'required|string|max:255',
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


// Mengupdate Data

    public function updateData($id)
    {
        $updateKomputer= Komputer::findOrFail($id);
        $monitor = Barang::where('jns_brg', 'Monitor')->get();
        $keyboard = Barang::where('jns_brg', 'Keyboard')->get();
        $ram = Barang::where('jns_brg', 'Ram')->get();
        $prosesor = Barang::where('jns_brg', 'Prosesor')->get();
        $ssd_hdd = Barang::where('jns_brg', 'SSD/HDD')->get();
        $motherboard = Barang::where('jns_brg', 'Motherboard')->get();
        $lan_card = Barang::where('jns_brg', 'Lan Card')->get();


        return view('updateData', compact('updateKomputer', 'monitor', 'keyboard', 'ram', 'prosesor', 'ssd_hdd', 'motherboard', 'lan_card'));
    }

    public function editData(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_komputer'  => 'required|string|max:255',
            'ip_address'     => 'required|string|max:255',
            'sistem_operasi' => 'required|string|max:255',
            'ruangan'        => 'required|string|max:255',
            'id_monitor'        => 'required|string|max:255',
            'id_keyboard'       => 'required|string|max:255',
            'id_ram'            => 'required|string|max:255',
            'id_prosesor'       => 'required|string|max:255',
            'id_ssd_hdd'        => 'required|string|max:255',
            'id_motherboard'    => 'required|string|max:255',
            'id_lan_card'       => 'required|string|max:255',
            'keterangan'     => 'nullable|string',
            'images'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
 
        
        // Ambil data lama dari database
        $komputer = Komputer::findOrFail($id);
    

        // Simpan gambar jika ada, jika tidak gunakan gambar lama
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['images'] = 'images/' . $imageName;
        } else {
            $validatedData['images'] = $komputer->images; // Gunakan gambar lama
        }

   

        

        // Update data di database berdasarkan ID
        $komputer->update($validatedData);

        return redirect()->route('updateData', ['id' => $id])->with('success', 'Data komputer berhasil diupdate.');
    }



}
