<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetkpiController;
use App\Http\Controllers\RoundController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/setkpi',[SetkpiController::class,'index'])->name('Setkpi.index');
Route::get('/setkpi/create',[SetkpiController::class,'create'])->name('Setkpi.create');
Route::post('/setkpi',[SetkpiController::class,'store'])->name('Setkpi.store');
Route::get('/setkpi/edit',[SetkpiController::class,'edit'])->name('Setkpi.edit');
Route::post('/setkpi/update',[SetkpiController::class,'update'])->name('Setkpi.update');
Route::get('/setkpi/delete',[SetkpiController::class,'delete'])->name('Setkpi.delete');

Route::get('/round',[RoundController::class,'index'])->name('Round.index');
Route::get('/round/create',[RoundController::class,'create'])->name('Round.create');
Route::post('/round',[RoundController::class,'store'])->name('Round.store');
Route::get('/round/edit',[RoundController::class,'edit'])->name('Round.edit');
Route::post('/round/update',[RoundController::class,'update'])->name('Round.update');
Route::get('/round/delete',[RoundController::class,'delete'])->name('Round.delete');

