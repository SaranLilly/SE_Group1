<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
=======
// Route::get('/', function () {
//     return view('contact');
// });

>>>>>>> ba92794d2f30a834f978abd3515f146b4c68c995
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
<<<<<<< HEAD

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
>>>>>>> ba92794d2f30a834f978abd3515f146b4c68c995
