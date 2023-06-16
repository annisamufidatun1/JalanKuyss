<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\eventController;

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

Route::get('/registform', function () {
    return view('registform');
});
Route::get('/', function () {
    return view('welcome');
});

/*Route::controller(DBJalanKuyController::class)->group(function () {
    Route::get('/database', 'database');
    Route::get('/database/view/{id}', 'view');
    Route::get('/database/tambah', 'regform');
    Route::post('/database/store', 'store');
    Route::get('/database/edit/{id}', 'edit');
    Route::post('/database/update', 'update');
    Route::get('/database/hapus/{id}', 'hapus');
    Route::get('/database/cari', 'cari');
});*/

Route::controller(adminController::class)->group(function () {
    Route::get('/registform', 'registform');
    Route::get('/database/upload', 'upload');
    Route::get('/dashboard/results', 'search');
    Route::post('/upload/proses', 'uploadproses');
    Route::get('/admin', 'dashboardadmin');
    Route::post('/approve/{id}', 'approve')->name('approve');
    Route::get('/admin/refund-form/{id}', 'refundForm')->name('refundForm');
    Route::post('/admin/refund-form/upload','uploadRefund');
});

Route::controller(settingsController::class)->group(function () {
    Route::get('/settings/reportbug', 'reportbugform');
    Route::post('/settings/reportbug/success', [settingsController::class, 'store']);
    Route::get('/settings/reportbug/success', 'reportbugsuccess');
    Route::get('/settings', 'settings');
    Route::get('/settings/aboutus', 'aboutus');

});

Route::controller(eventController::class)->group(function () {
    Route::get('discovery', 'discovery');
    Route::get('dashboard', 'dashboard');
    Route::get('/detail-event/{id}', 'detailEvent');
    Route::get('/dashboard/search', 'search')->name('events.search');
});
