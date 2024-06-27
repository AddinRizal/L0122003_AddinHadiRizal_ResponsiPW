<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

Route::controller(PegawaiController::class)->prefix('pegawai')->group(function () {
    // Menampilkan Data Pegawai
    Route::get('/', 'datapegawai')->name('pegawais');
    // Menampilkan Tambah Data Pegawai
    Route::get('/tambahdata', 'tambahdata')->name('tambahdata');
    Route::post('/insertdata', 'insertdata')->name('insertdata');
    // Menampilkan Tambah Data Pegawai
    Route::get('editdata/{id}', 'editdata')->name('editdata');
    Route::post('/updatedata/{id}', 'updatedata')->name('updatedata');
    // Menghapus Data Pegawai
    Route::get('/delete/{id}', 'delete')->name('delete');
});
