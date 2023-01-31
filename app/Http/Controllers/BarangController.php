<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function showDataBarang()
    {
        // return Barang::paginate(10);
        return view('stock.data', [
            'data' => Barang::paginate(10),
        ]);
    }

    public function showStockBarang()
    {
        return view('stock.stock');
    }
}
