<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/evaluation-results', function () {
    return view('Evaluation-results');
});
Route::get('/resultkpiyear', function () {
    return view('resultkpiyear');
});
Route::get('/resultkpi', function () {
    return view('resultkpi');
});