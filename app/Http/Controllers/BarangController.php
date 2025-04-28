<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Barang;
use App\Models\Komputer;
use App\Models\BarangHistory;

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

        $dataPagination = Barang::paginate(5);

        return view ('createBarang', compact('dataBarang', 'dataPagination'));
    }


    public function deleteBarang($id)
    {
        $dataBarang = Barang::find($id);
        $dataBarang->delete();
        return redirect()->route('createBarang')->with('success', 'Data Barang Berhasil Dihapus.');
    }

    public function updateBarang($hash)
    {
        $slug = base64_decode($hash);
        $dataBarang = Barang::where('slug', $slug)->firstOrFail();

        $Barang = Barang::all();

        $semuaHistori = BarangHistory::where('barang_id', $dataBarang->id)
            ->with('user')
            ->orderBy('created_at')
            ->get();

        
        $riwayatPerubahan = [];

        foreach ($semuaHistori as $i => $history) {
            if ($i === 0) continue;

            $prev = $semuaHistori[$i - 1];
            $curr = $history;

            $fields = ['kode_brg', 'nama_brg', 'jns_brg'];

            foreach ($fields as $field) {
                $old = $prev->$field;
                $new = $curr->$field;

                if ($old != $new) {
                    $riwayatPerubahan[] = [
                        'field' => $field,
                        'lama' => $old,
                        'baru' => $new,
                        'waktu' => $curr->created_at->format('d M Y H:i'),
                        'user' => $curr->user->name ?? 'Unknown',
                    ];
                }
            }
        }

        return view('updateBarang', compact('dataBarang', 'Barang', 'riwayatPerubahan'));
    }



    public function editBarang(Request $request, $hash)
    {
        $validatedData = $request->validate([
            'kode_brg'  => 'required|string|max:255',
            'nama_brg'  => 'required|string|max:255',
            'jns_brg'   => 'required|string|max:255',
        ]);

        $slug = base64_decode($hash);
        $barang = Barang::where('slug', $slug)->firstOrFail();


        $fieldsToCheck = ['kode_brg', 'nama_brg', 'jns_brg'];

        $hasChanges = false;

        foreach ($fieldsToCheck as $field) {
            if ($barang->$field !== $validatedData[$field]) {
                $hasChanges = true;
                break;
            }
        }


          // Simpan snapshot awal jika belum ada histori sama sekali
        $historiExist = BarangHistory::where('barang_id', $barang->id)->exists();

        if (!$historiExist) {
            BarangHistory::create([
                'barang_id' => $barang->id,
                'kode_brg'  => $barang->kode_brg,
                'nama_brg'  => $barang->nama_brg,
                'jns_brg'   => $barang->jns_brg,
                'user_id'   => auth()->id(),
                'created_at' => now()
            ]);
        }

        // Update barang
        $barang->update($validatedData);

        // Simpan snapshot ke history jika ada perubahan
        if ($hasChanges) {
            BarangHistory::create(array_merge(
                ['barang_id' => $barang->id],
                $validatedData,
                ['user_id' => auth()->id(), 'created_at' => now()]
            ));
        }
        return redirect()->route('updateBarang', ['hash' => $hash])
            ->with('success', 'Data Barang Berhasil Di UPDATE.');
    }
       
}
