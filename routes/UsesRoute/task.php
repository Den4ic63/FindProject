<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectTaskController;

Route::prefix('tasks')->middleware('auth')->group(function (){
    Route::get('/',[ProjectTaskController::class,'index'])->name('task.index');

});
