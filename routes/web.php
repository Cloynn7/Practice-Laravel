<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});

Route::get('/latihan', function () {
    return view('Sekolah/latihan2');
});

Route::get('/hitungluas', function () {
    $var1 = '50';
    $var2 = '50';
    $luas = $var1 * $var2;
    echo "<h1>Hasil perhitungan 2 variabel</h1><br>";
    echo "<hr>";
    echo "<h2>Variabel 1 :" . $var1 . "<br>";
    echo " Variabel 2 " . $var2 . "<br>";
    return "Hasil perhitungan 2 variabel adalah : " . $luas . "</h2><hr>";
});

Route::get('/template', function() {
    return view('Sekolah.template');
});

Route::get('/cariluas', [AreaController::class, 'index'])->name('hitung.index');
Route::post('/cariluas', [AreaController::class, 'hitungLuas'])->name('hitung.luas');

Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index');
Route::post('/biodata', [BiodataController::class, 'create'])->name('biodata.create');