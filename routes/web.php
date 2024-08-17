<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\SesiController;

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

Route::get('/', function () {
    return view('homepage');
});

Route::view('/form_pendaftar', 'pendaftar.form_pendaftar');
Route::view('/login', 'admin.login');
Route::view('/latest_training', 'konten.latest_training');
Route::view('/team_multimedia', 'department.mulmed');
Route::view('/team_software', 'department.software');
Route::view('/team_network', 'department.network');

Route::get('/form_pendaftar', [PendaftaranController::class, 'index']);
Route::post('/submit-form', [PendaftaranController::class, 'create']);

Route::get('/admin', [AdminController::class, 'home'])->name('home');
Route::get('/multimedia', 'App\Http\Controllers\AdminController@multimedia')->name('multimedia');
Route::get('/network', 'App\Http\Controllers\AdminController@network')->name('network');
Route::get('/software', 'App\Http\Controllers\AdminController@software')->name('software');

Route::get('/login', [SesiController::class, 'index']);
Route::post('/login', [SesiController::class, 'login']);
Route::get('/logout',[SesiController::class, 'logout']);

Route::put('/update-status/{id_peserta}', [AdminController::class, 'updateStatus'])->name('update.status');

