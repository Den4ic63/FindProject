<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->middleware(['admin','auth'])->group(function (){
    Route::get('{user}',[AdminController::class,'show'])->name('admin.show');
    Route::get('create',[AdminController::class,'create'])->name('admin.create');
    Route::get('/',[AdminController::class,'store'])->name('admin.store');
    Route::get('{user}/edit',[AdminController::class,'edit'])->name('admin.edit');
    Route::put('{user}',[AdminController::class,'update'])->name('admin.update');
    Route::delete('{user}',[AdminController::class,'destroy'])->name('admin.destroy');
});

