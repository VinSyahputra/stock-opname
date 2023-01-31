<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Models\Barang;
use App\Models\JenisBarang;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard', [
        'jenisbarang' => JenisBarang::all()->count(),
        'data' => Barang::sum('jumlah')
    ]);
});
Route::get('/data', [BarangController::class, 'showDataBarang']);
Route::get('/jenis',  [JenisBarangController::class, 'index']);
Route::fallback(function () {
    return view('404');
});
