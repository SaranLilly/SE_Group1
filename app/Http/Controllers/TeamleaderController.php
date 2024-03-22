<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamleaderController extends Controller
{
    function employee() {
        return view('employee');
    }
    function employeeteam() {
        return view('employeeteam');
    }
    function evaluationform() {
        return view('evaluationform');
    }
    function evaluationsubmitform() {
        return view('evaluationsubmitform');
    }
    function resultkpi() {
        return view('resultkpi');
    }
    

}
