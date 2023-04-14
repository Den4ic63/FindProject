<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\OfficeUserController;


Route::prefix('office')->middleware(['auth','admin'])->group(function (){

    Route::get('/create',[OfficeController::class,'create'])->name('office.create');
    Route::post('/',[OfficeController::class,'store'])->name('office.store');
    Route::get('/',[OfficeController::class,'index'])->name('office.index');
    Route::get('/{office}',[OfficeController::class,'show'])->name('office.show');

    Route::post('/{office}/users', [OfficeUserController::class,'store'])->name('office.users.store');
    Route::delete('/{office}/users', [OfficeUserController::class,'destroy'])->name('office.users.destroy');

});
