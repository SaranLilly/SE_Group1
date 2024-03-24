<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    function index(){
        $test=[
            [
                'no'=>"",
                'title' =>"หัวข้อการประเมิน",
                'scorecriterion'=>"คะเเนน", 
                'scoreobtained'=>"คะเเนน",
                'criterion'=>"เกณฑ์",
                'criteriaobtained'=>"ทำได้",
                'result'=>"คะเเนนที่ได้"
            ],
            [
                'no'=>"1",
                'title' =>"ยอดขาย",
                'scorecriterion'=>"60", 
                'scoreobtained'=>"",
                'criterion1'=>"มากกว่า100%",
                'criterion2'=>"100%-95%",
                'criterion3'=>"95%-85%",
                'criterion4'=>"85%-75%",
                'criterion5'=>"ต่ำกว่า75%",
                'criteriaobtained'=>"85%",
                'result'=>"51"
            ],
            [
                'no'=>"2",
                'title' =>"สินค้า",
                'scorecriterion'=>"20", 
                'scoreobtained1'=>"20",
                'scoreobtained2'=>"17",
                'scoreobtained3'=>"15",
                'scoreobtained4'=>"13",
                'scoreobtained5'=>"0",
                'criterion1'=>"มากกว่า90%",
                'criterion2'=>"90%-80%",
                'criterion3'=>"80%-70%",
                'criterion4'=>"70%-50%",
                'criterion5'=>"ต่ำกว่า50%",
                'criteriaobtained'=>"72%",
                'result'=>"5"
            ],
            [
                'no'=>"3",
                'title' =>"Report",
                'scorecriterion'=>"10", 
                'scoreobtained1'=>"10",
                'scoreobtained2'=>"0",
                'criterion1'=>"ส่งตามกำหนด",
                'criterion2'=>"ไม่ส่งตามกำหนด",
                'criteriaobtained'=>"ส่งตามกำหนด",
                'result'=>"10"
            ],
            [
                'no'=>"4",
                'title' =>"ความสัมพันธ์กับลูกค้า",
                'scorecriterion'=>"10", 
                'scoreobtained1'=>"10",
                'scoreobtained2'=>"5",
                'scoreobtained3'=>"0",
                'criterion1'=>"ดีทั้ง3คน",
                'criterion2'=>"ดี2คน",
                'criterion2'=>"ดี1คนหรือไม่มีเลย",
                'criteriaobtained'=>"ดีทั้ง3คน",
                'result'=>"10"
            ]
        ];
        return view('Evaluation-results',compact('test'));
    }
}
