<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamleaderController;

// Route::get('/', function () {
//     return view('contact');
// });

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('layout',function() {
    return view('layout');
})->name('layout');

Route::get('test', function () {
    return view('test');
})->name('test');
Route::get('employee',[TeamleaderController::class,'employee'])->name('employee');
Route::get('employeeteam',[TeamleaderController::class,'employeeteam'])->name('employeeteam');
Route::get('evaluationform',[TeamleaderController::class,'evaluationform'])->name('evaluationform');
Route::get('evaluationsubmitform',[TeamleaderController::class,'evaluationsubmitform'])->name('evaluationsubmitform');
Route::get('resultkpi',[TeamleaderController::class,'resultkpi'])->name('resultkpi');
Route::get('/post','PostController@save');





