<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('user')->middleware(['auth','admin'])->group(function (){
    Route::get('/',[UserController::class,'index'])->name('user.index');

    Route::put('/{user}/update',[UserController::class,'update'])->name('user.update');

//    Route::get('{user}',[UserController::class,'show'])->name('user.show');
//    Route::get('create',[UserController::class,'create'])->name('user.create');
//    Route::get('/',[UserController::class,'store'])->name('user.store');
//    Route::get('{user}/edit',[UserController::class,'edit'])->name('user.edit');
//    Route::put('{user}',[UserController::class,'update'])->name('user.update');
//    Route::delete('{user}',[UserController::class,'destroy'])->name('user.destroy');

});

