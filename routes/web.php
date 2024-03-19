<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetkpiController;
use App\Http\Controllers\RoundController;

use App\Http\Controllers\SelectionkpiController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/setkpi', [SetkpiController::class, 'index'])->name('setkpi.index');
Route::get('/setkpi/create', [SetkpiController::class, 'create'])->name('setkpi.create');
Route::post('/setkpi', [SetkpiController::class, 'store'])->name('setkpi.store');
Route::get('/setkpi/{setkpi}/edit', [SetkpiController::class, 'edit'])->name('setkpi.edit');
Route::put('/setkpi/{setkpi}/update', [SetkpiController::class, 'update'])->name('setkpi.update');
Route::delete('/setkpi/{setkpi}/delete', [SetkpiController::class, 'delete'])->name('setkpi.delete');

Route::get('/round', [RoundController::class, 'index'])->name('round.index');
Route::get('/round/create', [RoundController::class, 'create'])->name('round.create');
Route::post('/round', [RoundController::class, 'store'])->name('round.store');
Route::get('/round/{round}/edit', [RoundController::class, 'edit'])->name('round.edit');
Route::put('/round/{round}/update', [RoundController::class, 'update'])->name('round.update');
Route::delete('/round/{round}/delete', [RoundController::class, 'delete'])->name('round.delete');

Route::get('/selectionkpi', [SelectionkpiController::class, 'index'])->name('selectionkpi.index');
Route::get('/selectionkpi/create', [SelectionkpiController::class, 'create'])->name('selectionkpi.create');
Route::post('/selectionkpi', [SelectionkpiController::class, 'store'])->name('selectionkpi.store');
Route::get('/selectionkpi/{selectionkpi}/edit', [SelectionkpiController::class, 'edit'])->name('selectionkpi.edit');
Route::put('/selectionkpi/{selectionkpi}/update', [SelectionkpiController::class, 'update'])->name('selectionkpi.update');
Route::delete('/selectionkpi/{selectionkpi}/delete', [SelectionkpiController::class, 'delete'])->name('selectionkpi.delete');
