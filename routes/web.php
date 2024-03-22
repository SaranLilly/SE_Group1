<?php

use App\Http\Controllers\CriteriakpiController;
use App\Http\Controllers\CriterionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SaleteamController;
use Illuminate\Support\Facades\Route;

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
