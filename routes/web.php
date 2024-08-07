<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\VerifyOwnerController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsOwner; 

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::middleware([IsOwner::class])->group(function () {
        Route::get('/owner/homestay/create', [HomestayController::class, 'create'])->name('create.fasilitas');
        Route::post('/owner/homestay/store', [HomestayController::class, 'store'])->name('store.fasilitas');
        Route::get('/owner/homestay/edit/{id}', [HomestayController::class, 'edit'])->name('edit.fasilitas');
        Route::put('/owner/homestay/update/{id}', [HomestayController::class, 'update'])->name('update.fasilitas'); 
        Route::get('/owner/homestay/available/{homestay:id}', [HomestayController::class, 'available'])->name('available.homestay');

        Route::get('/pay', [PayController::class, 'index'])->name('pay');
        Route::put('/pay/{id}/update-status', [PayController::class, 'updateStatus'])->name('updateStatus');
    });

    Route::middleware([IsAdmin::class])->group(function () {
        Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create.news');
        Route::post('/admin/news/store', [NewsController::class, 'store'])->name('store.news'); 
        Route::delete('/news/delete/{id}', [NewsController::class, 'delete'])->name('delete.news');

        Route::get('/verifyowner', [VerifyOwnerController::class, 'index'])->name('verify.owner');
        Route::patch('/verifyowner/verify/{user:id}', [VerifyOwnerController::class, 'verify'])->name('ver.owner');

        Route::get('/datahapus', [HomestayController::class, 'DataHapus'])->name('DataHapus');
        Route::put('/datahapus/{id}/update-status', [HomestayController::class, 'repairAvailable'])->name('repairAvailable');
    });

    Route::post('/addorder', [HomestayController::class, 'addorder'])->name('addorder');
    Route::post('/addorder/{slug}', [HomestayController::class, 'addorder']);
});

// Route::get('homestay/available/{homestay:id}', [HomestayController::class, 'verify'])->name('status.homestay');
Route::put('/homestay/{id}/update-status', [HomestayController::class, 'updateAvailable'])->name('updateAvailable');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fasilitas/{fasilitas:title_slug}', [HomestayController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/available/{fasilitas:id}', [HomeController::class, 'availables'])->name('availables');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/owner/fasilitas/delete/{fasilitas:id}', [HomestayController::class, 'delete'])->name('delete.fasilitas');