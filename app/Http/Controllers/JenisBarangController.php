<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index()
    {
        return view('stock.jenis', [
            'data' => JenisBarang::paginate(10),
        ]);
    }
}
