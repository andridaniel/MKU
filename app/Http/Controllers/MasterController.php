<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komputer;

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
        $request->validate([
            'nama_komputer' => 'required',
            'ip_address' => 'required',
            'sistem_operasi' => 'required',
            'ruangan' => 'required',
            'monitor' => 'required',
            'keyboard' => 'required',
            'ram' => 'required',
            'processor' => 'required',
            'ssd/hhd' => 'required',
            'motherboard' => 'required',
            'lan_card' => 'required',
            'keterangan' => 'required',
            'images' => 'required'
        ]);
        $images = $request->file('images');
        $images->storeAs('public/images', $images->hashName());

       $dataKomputer = komputer::create([
            'nama_komputer' => $request->nama_komputer,
            'ip_address' => $request->ip_address,            
            'sistem_operasi' => $request->sistem_operasi,            
            'ruangan' => $request->ruangan,            
            'monitor' => $request->monitor,            
            'keyboard' => $request->keyboard,            
            'ram' => $request->ram,            
            'processor' => $request->processor,            
            'ssd_hhd' => $request->ssd_hhd,            
            'motherboard' => $request->motherboard,            
            'lan_card' => $request->lan_card,            
            'keterangan' => $request->keterangan,            
            'images' => $images->hashName()
        ]); 
        dd($dataKomputer);

        return redirect()->route('dataKomputer')->with(['success' => 'Data Berhasil Disimpan!']);
    }

}
