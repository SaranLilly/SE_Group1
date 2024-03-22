<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Evalution;
use App\Models\Round;
use App\Models\Setkpi;

class EvalutionController extends Controller
{
    public function index(){
        /* $evaluations = DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassess')     
        ->join('round', 'round.idround', '=', 'evaluation.idround') 
        ->join('setkpi', 'setkpi.idset', '=', 'evaluation.idset')          
        ->get();
        $emp=DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassessed') 
        ->select('evaluation.*', 'employee.firstName') 
        ->get(); */
        $evaluations = DB::select('SELECT evaluation.idevaluation,e1.firstName as assess  ,e2.firstName as assessed, setkpi.titleset,round.date 
        FROM evaluation 
        LEFT JOIN (SELECT * FROM employee) as e1 ON e1.empID = evaluation.idassess 
        LEFT JOIN (SELECT * FROM employee) as e2 ON e2.empID = evaluation.idassessed 
        LEFT JOIN round ON round.idround = evaluation.idround 
        LEFT JOIN setkpi ON setkpi.idset = evaluation.idset');
        //dd($evaluations);
        return view('evaluation.index', ['evaluations' => $evaluations]);
    }
    public function create(){
        $employees=DB::table('employee')->get();
        $rounds= Round::all();
        $setkpis=Setkpi::all();
        return view('evaluation.create', ['employees' => $employees, 'rounds' => $rounds, 'setkpis' => $setkpis]);
    }
    public function store(Request $request){
        //dd($request);
        $data = $request->validate([
            'idassess'=> 'required',
            'idassessed'=> 'required',
            'idround'=> 'required',
            'idset'=> 'required',
        ]);

        Evalution::create($data);

        return redirect(route('evaluation.index'));
    }
    public function edit(Evalution $evaluation){
        $employees=DB::table('employee')->get();
        $rounds= Round::all();
        $setkpis=Setkpi::all();
        return view('evaluation.update', ['evaluation' => $evaluation ,'employees' => $employees, 'rounds' => $rounds, 'setkpis' => $setkpis]);
    }
    public function update(Evalution $evaluation, Request $request){
        $data = $request->validate([
            'idassess'=> 'required',
            'idassessed'=> 'required',
            'idround'=> 'required',
            'idset'=> 'required',
        ]);

        $evaluation->update($data);

        return redirect(route('evaluation.index'))->with('success', 'evaluation updated successfully');
    }

    public function delete(Evalution $evaluation){
        $evaluation->delete();
        return redirect(route('evaluation.index'))->with('success', 'evaluation delete successfully');
    }
    //
}
