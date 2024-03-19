<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetkpiController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/setkpi',[SetkpiController::class,'index'])->name('Setkpi.index');

Route::get('/setkpi/create',[SetkpiController::class,'create'])->name('Setkpi.create');
Route::post('/setkpi',[SetkpiController::class,'store'])->name('test.store');

Route::get('/setkpi/edit',[SetkpiController::class,'edit'])->name('Setkpi.edit');
Route::post('/setkpi/update',[SetkpiController::class,'update'])->name('Setkpi.update');

Route::get('/setkpi/delete',[SetkpiController::class,'delete'])->name('Setkpi.delete');
