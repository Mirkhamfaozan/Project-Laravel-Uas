<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);


Route::get('/toko', function () {
    return view('toko');
});


use App\Http\Controllers\TokoController;
Route::controller(TokoController::class)->group(function() {
    Route::get('toko/', 'index');
    Route::get('toko/add', 'add');
    Route::post('toko/store', 'store');
    Route::get('toko/edit/{id}', 'edit');
    Route::post('toko/update/{id}', 'update');
    Route::get('toko/delete/{id}', 'delete');
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

