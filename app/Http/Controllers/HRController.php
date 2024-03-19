<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HRController extends Controller
{
    function employeeAll(){
        return view('employeeAll');
    }
    function Addemployee() {
        return view('employeveteam');
    }
    function employeeteamHR() {
        return view('employeeteamHR');
    }
    function evaluationformHR() {
        return view('evaluationformHR');
    }
    function AddevaluationformHR() {
        return view('AddevaluationformHR');
    }
    function Topicevaluationform() {
        return view('Topicevaluationform');
    }
    function AddTopicevaluationform() {
        return view('AddTopicevaluationform');
    }
    function evaluationsubmitformHR() {
        return view('evaluationsubmitformHR');
    }
    


}
