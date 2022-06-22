<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\LoginController;
// use App\http\About

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
    return view('welcome');
});

Route::get('login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\LoginController@proses')->name('proses_login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'login:admin']], function ()
{
    Route::get('/warga', [WargaController::class,'index'])->name('warga.index');
    Route::get('/warga/create', [WargaController::class, 'create']);
    Route::get('/warga/edit/{id}', [WargaController::class, 'edit'])->name('warga.edit');
    Route::post('/warga/store', [WargaController::class, 'store'])->name('warga-store');
    Route::put('/warga/update/{id}', [WargaController::class, 'update'])->name('warga.update');
    Route::delete('/warga/hapus/{id}', [WargaController::class, 'destroy'])->name('warga.hapus');
});

