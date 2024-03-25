<?php

namespace App\Http\Controllers;

use App\Models\Criteriakpi;
use App\Models\Evalution;
use App\Models\Round;
use App\Models\Selectionkpi;
use App\Models\Setkpi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvalutionController extends Controller
{
    public function index()
    {
        /* $evaluations = DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassess')
        ->join('round', 'round.idround', '=', 'evaluation.idround')
        ->join('setkpi', 'setkpi.idset', '=', 'evaluation.idset')
        ->get();
        $emp=DB::table('evaluation')
        ->join('employee', 'employee.empID', '=', 'evaluation.idassessed')
        ->select('evaluation.*', 'employee.firstName')
        ->get(); */
        $evaluations = DB::select('SELECT evaluation.idevaluation,e1.firstName as assessN ,e1.lastName as assessF   ,e2.firstName as assessedN  ,e2.lastName assessedF  , setkpi.titleset,round.date
        FROM evaluation
        LEFT JOIN (SELECT * FROM employee) as e1 ON e1.empID = evaluation.idassess
        LEFT JOIN (SELECT * FROM employee) as e2 ON e2.empID = evaluation.idassessed
        LEFT JOIN round ON round.idround = evaluation.idround
        LEFT JOIN setkpi ON setkpi.idset = evaluation.idset;');
        //dd($evaluations);
        return view('evaluation.index', ['evaluations' => $evaluations]);
    }
    public function evaform()
    {
        echo ("riri");
    }
    public function create()
    {
        $employees = DB::select('SELECT * FROM `employee` WHERE employee.positionID = 1 OR employee.positionID = 2');
        $employees2 = DB::select('SELECT * FROM `employee` WHERE employee.positionID = 2 OR employee.positionID = 3');
        $rounds = Round::all();
        $setkpis = Setkpi::all();
        // $selectionkpis = Selectionkpi::all();
        $selectionkpis = DB::table('selectionkpi')
            ->leftJoin('setkpi', 'setkpi.idset', '=', 'selectionkpi.idset')
            ->leftJoin('criteriakpi', 'criteriakpi.crID', '=', 'selectionkpi.idcriteriakpi')
            ->select('setkpi.titleset', 'criteriakpi.title')
            ->get();

        $criteriakpis = Criteriakpi::all();
        $criterions = DB::table('criterion')
            ->leftJoin('criteriakpi', 'criteriakpi.crID', '=', 'criterion.idcriteriakpi')
            ->select('criterion.*', 'criteriakpi.title')
            ->get();

        return view('evaluation.create', ['employees' => $employees, 'rounds' => $rounds, 'setkpis' => $setkpis,
            'criterions' => $criterions, 'employees2' => $employees2, 'selectionkpis' => $selectionkpis
            , 'criteriakpis' => $criteriakpis]);
    }
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'idassess' => 'required',
            'idassessed' => 'required',
            'idround' => 'required',
            'idset' => 'required',
        ]);

        Evalution::create($data);

        return redirect(route('evaluation.index'));
    }
    public function edit(Evalution $evaluation)
    {
        $employees = DB::select('SELECT * FROM `employee` WHERE employee.positionID = 1 OR employee.positionID = 2');
        $employees2 = DB::select('SELECT * FROM `employee` WHERE employee.positionID = 2 OR employee.positionID = 3');
        $rounds = Round::all();
        $setkpis = Setkpi::all();
        return view('evaluation.update', ['evaluation' => $evaluation, 'employees' => $employees, 'rounds' => $rounds, 'setkpis' => $setkpis, 'employees2' => $employees2]);
    }
    public function update(Evalution $evaluation, Request $request)
    {
        $data = $request->validate([
            'idassess' => 'required',
            'idassessed' => 'required',
            'idround' => 'required',
            'idset' => 'required',
        ]);

        $evaluation->update($data);

        return redirect(route('evaluation.index'))->with('success', 'evaluation updated successfully');
    }

    public function delete(Evalution $evaluation)
    {
        $evaluation->delete();
        return redirect(route('evaluation.index'))->with('success', 'evaluation delete successfully');
    }
    public function showDropdown()
    {
        $setkpis = Setkpi::all(); // หรือดึงข้อมูลของคุณจากที่ไหนก็ได้ที่คุณเก็บมัน
        //return view('example', compact('data'));
        //return view('evaluation.create', ['setkpis' => $setkpis], compact('setkpis'));
        return view('setkpi.index', ['setkpis' => $setkpis], compact('setkpis'));

    }

    // public function processSelection(Request $request)
    // {
    //     $setkpis = $request->input('dropdown');
    //     // ประมวลผลรายการที่เลือกตามที่ต้องการ
    //     $setkpis = Setkpi::all(); // หรือดึงข้อมูลของคุณจากที่ไหนก็ได้ที่คุณเก็บมัน
    //     //return view('example', compact('data'));
    //     //return view('evaluation.create', ['setkpis' => $setkpis], compact('setkpis'));
    //     return view('setkpi.index', ['setkpis' => $setkpis], compact('setkpis'));
    // }
    // ใน controller หรือสคริปต์ที่ใช้งานกับฐานข้อมูล
    public function processSelection(Request $request)
    {
        $selectedValue = $request->input('selectedValue');
        // ดึงข้อมูลจากฐานข้อมูลตามค่าที่เลือก
        $selectionkpis = Selectionkpi::where('selectionkpis', $selectedValue)->get();
        return response()->json($selectionkpis);
    }

}
