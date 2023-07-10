<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KampusController;
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
    return view('Kampus');
});

Route::get('/dashboard',[KampusController::class, 'index'])->name('dashboard');


Route::get('/page', function () {
    return view('page');
});

Route::get('/daftarkampus', function () {
    return view('daftarkampus');
});

Route::get('/nilaimatapelajaran', function () {
    return view('nilaimatapelajaran');
});

Route::get('/artikel', function () {
    return view('artikel');
});


Route::get('/datadaftarkampus', function () {
    return view('datadaftarkampus');
});

use App\Http\Controllers\KriteriaController;
Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

use App\Http\Controllers\AlternatifController;
Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});

use App\Http\Controllers\HitungController;
Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');




