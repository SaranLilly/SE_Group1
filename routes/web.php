<?php

use App\Http\Controllers\EmployeeController;
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
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'listofname'])->name('employee.listofname');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Route::get('/saleteam', [SaleteamController::class, 'index'])->name('saleteam.index');
Route::get('/saleteam/create', [SaleteamController::class, 'create'])->name('saleteam.create');
Route::post('/saleteam', [SaleteamController::class, 'listofname'])->name('saleteam.listofname');
Route::get('/saleteam/{saleteam}/edit', [SaleteamController::class, 'edit'])->name('saleteam.edit');
Route::put('/saleteam/{saleteam}/update', [SaleteamController::class, 'update'])->name('saleteam.update');
Route::delete('/saleteam/{saleteam}/destroy', [SaleteamController::class, 'destroy'])->name('saleteam.destroy');
