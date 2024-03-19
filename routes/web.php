<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
Route::get('/employee',[EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create',[EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee',[EmployeeController::class, 'listofname'])->name('employee.listofname');
Route::get('/employee/{employee}/edit',[EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update',[EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{employee}/destroy',[EmployeeController::class, 'destroy'])->name('employee.destroy');



