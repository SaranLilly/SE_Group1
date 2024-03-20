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
        $evaluations = DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassess')     
        ->join('round', 'round.idround', '=', 'evaluation.idround') 
        ->join('setkpi', 'setkpi.idset', '=', 'evaluation.idset')          
        ->get();
        $emp=DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassessed') 
        ->select('evaluation.*', 'employee.firstName') 
        ->get();

        return view('evaluation.index', ['evaluations' => $evaluations,'emp' => $emp]);
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
