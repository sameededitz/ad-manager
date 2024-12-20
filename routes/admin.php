<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OptionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'verifyRole:admin']], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin-home');

    Route::get('/ads', [AdController::class, 'index'])->name('all-ads');

    Route::get('/ad/create', [AdController::class, 'create'])->name('add-ad');

    Route::get('/ad/edit/{ad}', [AdController::class, 'edit'])->name('edit-ad');

    Route::delete('/ad/delete/{ad}', [AdController::class, 'destroy'])->name('delete-ad');

    Route::get('/adminUsers', [AdminController::class, 'allAdmins'])->name('all-admins');

    Route::get('/signup', [AdminController::class, 'addAdmin'])->name('add-admin');

    Route::get('/edit-admin/{user}', [AdminController::class, 'editAdmin'])->name('edit-admin');

    Route::delete('/delete-admin/{user}', [AdminController::class, 'deleteAdmin'])->name('delete-admin');
});
