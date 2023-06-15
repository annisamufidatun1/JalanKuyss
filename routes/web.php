<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::controller(ProfileController::class)->group(function () {
//     Route::get('/nyoba', 'daftar');
// });
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard',[adminController::class, 'dashboardadmin']);
    Route::get('/template', [adminController::class,'template']);
    Route::get('/registform', [adminController::class,'registforms']);
    Route::post('/upload/proses', [adminController::class, 'uploadproses']);
    Route::get('/admin', [adminController::class,'dashboardadmin']);
    Route::post('/process', [adminController::class,'getEvent']);

    Route::get('/admin/refund-form/{id}', [adminController::class, 'refundForm']);
    Route::post('/admin/refund-form/upload',[adminController::class,'uploadRefund']);
});

Route::controller(ProfileController::class)->group(function () {
    Route::get('/nyoba', 'daftar');
});
Route::controller(ProfileController::class)->group(function () {
    Route::get('/cek', 'nyoba');
});
