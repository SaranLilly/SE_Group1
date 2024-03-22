<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empOverallController extends Controller
{
    function index() {
        return view('empOverall.index');
    }
}
