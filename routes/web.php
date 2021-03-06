<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;
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
Route::get('/about', function(){
    return view('about');
});
Route::get('/destroy/delete{id}', [SuratController::class, 'destroy']);
Route::get('storage/{pdf}', [SuratController::class, 'cetak_pdf'])->name('surat.unduh');
Route::get('/surat/pdf', [SuratController::class, 'pdf']);
// Route::get('/user', [UserController::class, 'index']);
Route::resource('surat', 'App\Http\Controllers\SuratController');

