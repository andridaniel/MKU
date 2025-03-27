<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}
