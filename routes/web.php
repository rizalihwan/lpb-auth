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
Route::get('/sihalal/login', function () {
    return view('sihalal.auth.login');
});

Route::get('/sihalal/dashboard', function () {
    return view('sihalal.dashboard');
});

Route::get('/sihalal/biaya', function () {
    return view('sihalal.data_master.biaya.index');
});

Route::get('/sihalal/jadwal-audit', function () {
    return view('sihalal.data_master.jadwal_audit.index');
});

Route::get('/sihalal/periksa-audit', function () {
    return view('sihalal.data_master.periksa_auditor.index');
});

Route::get('/sihalal/facilitated', function () {
    return view('sihalal.data_master.facilitated.index');
});
