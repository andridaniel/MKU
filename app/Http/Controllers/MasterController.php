<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komputer;
use App\Models\Barang;
use App\Models\DataKomputerHistory;


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

        $dataKomputerPagination = Komputer::paginate(8);
        return view('dataKomputer', compact('data', 'dataKomputerPagination'));


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



      

        $semuaHistori = DataKomputerHistory::with([
            'monitor',
            'keyboard',
            'ram',
            'prosesor',
            'ssd_hdd',
            'motherboard',
            'lan_card',
            'user'
        ])->where('data_komputer_id', $id)
          ->orderBy('created_at')
          ->get();
        
        $riwayatPerubahan = [];
        
        foreach ($semuaHistori as $i => $history) {
            if ($i === 0) continue;
            
            $prev = $semuaHistori[$i - 1];
            $curr = $history;
        
            $fields = [
                'nama_komputer', 'ip_address', 'sistem_operasi', 'ruangan',
                'id_monitor', 'id_keyboard', 'id_ram', 'id_prosesor',
                'id_ssd_hdd', 'id_motherboard', 'id_lan_card',
                'keterangan', 'images'
            ];
        
            $relasiBarang = [
                'id_monitor'     => 'monitor',
                'id_keyboard'    => 'keyboard',
                'id_ram'         => 'ram',
                'id_prosesor'    => 'prosesor',
                'id_ssd_hdd'     => 'ssd_hdd',
                'id_motherboard' => 'motherboard',
                'id_lan_card'    => 'lan_card',
            ];
        
            foreach ($fields as $field) {
                $prevValue = $prev->$field ?? null;
                $currValue = $curr->$field ?? null;
        
                if (array_key_exists($field, $relasiBarang)) {
                    $relasi = $relasiBarang[$field];
                    $prevValue = optional($prev->$relasi)->nama_brg;
                    $currValue = optional($curr->$relasi)->nama_brg;
                }
        
                if ($prevValue != $currValue) {
                    $riwayatPerubahan[] = [
                        'field' => $field,
                        'lama' => $prevValue,
                        'baru' => $currValue,
                        'waktu' => $curr->created_at->format('d M Y H:i'),
                        'user' => $curr->user,
                    ];
                }
            }
        }
        

        return view('updateData', compact('updateKomputer', 'monitor', 'keyboard', 'ram', 'prosesor', 'ssd_hdd', 'motherboard', 'lan_card',   'riwayatPerubahan' ));   
    }

    public function editData(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_komputer'  => 'required|string|max:255',
            'ip_address'     => 'required|string|max:255',
            'sistem_operasi' => 'required|string|max:255',
            'ruangan'        => 'required|string|max:255',
            'id_monitor'     => 'required|string|max:255',
            'id_keyboard'    => 'required|string|max:255',
            'id_ram'         => 'required|string|max:255',
            'id_prosesor'    => 'required|string|max:255',
            'id_ssd_hdd'     => 'required|string|max:255',
            'id_motherboard' => 'required|string|max:255',
            'id_lan_card'    => 'required|string|max:255',
            'keterangan'     => 'nullable|string',
            'images'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $komputer = Komputer::findOrFail($id);
    
        // Simpan gambar jika ada, jika tidak gunakan gambar lama
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $validatedData['images'] = 'images/' . $imageName;
        } else {
            $validatedData['images'] = $komputer->images;
        }
    
        // Cek perbedaan data untuk log perubahan
        $fieldsToCheck = [
            'nama_komputer', 'ip_address', 'sistem_operasi', 'ruangan',
            'id_monitor', 'id_keyboard', 'id_ram', 'id_prosesor',
            'id_ssd_hdd', 'id_motherboard', 'id_lan_card',
            'keterangan', 'images'
        ];
    
        $changes = [];
    
        foreach ($fieldsToCheck as $field) {
            if ($komputer->$field != $validatedData[$field]) {
                $changes[$field] = [
                    'lama' => $komputer->$field,
                    'baru' => $validatedData[$field],
                ];
            }
        }

        // Simpan snapshot awal jika belum ada histori sama sekali
        $historiExist = DataKomputerHistory::where('data_komputer_id', $komputer->id)->exists();
    
        if (!$historiExist) {
            DataKomputerHistory::create([
                'data_komputer_id' => $komputer->id,
                'nama_komputer'  => $komputer->nama_komputer,
                'ip_address'     => $komputer->ip_address,
                'sistem_operasi' => $komputer->sistem_operasi,
                'ruangan'        => $komputer->ruangan,
                'id_monitor'     => $komputer->id_monitor,
                'id_keyboard'    => $komputer->id_keyboard,
                'id_ram'         => $komputer->id_ram,
                'id_prosesor'    => $komputer->id_prosesor,
                'id_ssd_hdd'     => $komputer->id_ssd_hdd,
                'id_motherboard' => $komputer->id_motherboard,
                'id_lan_card'    => $komputer->id_lan_card,
                'keterangan'     => $komputer->keterangan,
                'images'         => $komputer->images,
                'user_id'        => auth()->id(),
                'created_at'     => now(),
            ]);
        }
        
        // Update data ke database
        $komputer->update($validatedData);
    
        // Simpan satu snapshot baru ke histori kalau ada perubahan
        if (!empty($changes)) {
            DataKomputerHistory::create(array_merge(
                ['data_komputer_id' => $komputer->id],
                $validatedData,
                [
                    'user_id' => auth()->id(),
                    'created_at' => now()
                ]
            ));
        }
    
        return redirect()->route('updateData', ['id' => $id])->with('success', 'Data komputer berhasil diupdate.');
    }
    


}
