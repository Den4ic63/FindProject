<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::prefix('project')->middleware(['auth','admin'])->group(function (){

    Route::get('/',[ProjectController::class,'index'])->name('project.index');
    Route::get('/create',[ProjectController::class,'create'])->name('project.create');
    Route::post('/',[ProjectController::class,'store'])->name('project.store');


});
