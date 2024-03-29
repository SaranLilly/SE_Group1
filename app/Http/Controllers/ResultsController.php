<?php

namespace App\Http\Controllers;

use App\Models\Evalution;
use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    public function index()
    {
        $results = DB::select('SELECT evaluation.idevaluation,e1.firstName as assessN ,e1.lastName as assessF   ,e2.firstName as assessedN  ,e2.lastName assessedF , criteriakpi.title,results.weight,results.score
        FROM results
        LEFT JOIN evaluation  ON results.idevalution = evaluation.idevaluation
        LEFT JOIN (SELECT * FROM employee) as e1 ON e1.empID = evaluation.idassess
        LEFT JOIN (SELECT * FROM employee) as e2 ON e2.empID = evaluation.idassessed
        INNER JOIN criteriakpi ON results.idcriterakipi = criteriakpi.crID ORDER BY `assessedN` ASC');

        return view('result.index', ['results' => $results]);
    }
    public function create()
    {
        $evaluations = Evalution::all();
        $criteriakpis = DB::table('criteriakpi')->get();
        return view('result.create', ['criteriakpis' => $criteriakpis, 'evaluations' => $evaluations]);
    }
    // public function store(Request $request)
    // {
    //     //dd($request);
    //     $data = $request->validate([
    //         'idcriterakipi' => 'required',
    //         'idevalution' => 'required',
    //         'weight' => 'required',
    //         'score' => 'required',
    //     ]);
    //     //dd($data);
    //     Results::create($data);

    //     return redirect(route('result.index'));
    // }
    public function store(Request $request)
    {
        $data = $request->validate([
            'idcriterakipi' => 'required|array',
            'idcriterakipi.*' => 'required',
            'idevalution' => 'required',
            'weight' => 'required',
            'score' => 'required|array',
            'score.*' => 'required',
        ]);

        // ตรวจสอบความยาวของค่า idcriterakipi และ score ว่าเท่ากันหรือไม่
        if (count($data['idcriterakipi']) !== count($data['score'])) {
            return redirect()->back()->withErrors(['error' => 'ค่า idcriterakipi และ score ไม่สอดคล้องกัน']);
        }

        // ตรวจสอบและปรับปรุงค่าตามที่คุณต้องการก่อนบันทึกลงในฐานข้อมูล

        // บันทึกข้อมูล
        foreach ($data['idcriterakipi'] as $key => $idcriterakipi) {
            $resultData = [
                'idcriterakipi' => $idcriterakipi,
                'idevalution' => $data['idevalution'],
                'weight' => $data['weight'],
                'score' => $data['score'][$key],
            ];
            Results::create($resultData);
        }

        return redirect(route('result.index'));
    }

    public function edit(Results $result)
    {
        $evaluations = Evalution::all();
        $criteriakpis = DB::table('criteriakpi')->get();
        return view('result.update', ['result' => $result, 'criteriakpis' => $criteriakpis, 'evaluations' => $evaluations]);
    }
    public function update(Results $result, Request $request)
    {
        $data = $request->validate([
            'idcriterakipi' => 'required',
            'idevalution' => 'required',
            'weight' => 'required',
            'score' => 'required',
        ]);

        $result->update($data);

        return redirect(route('result.index'))->with('success', 'result updated successfully');
    }

    public function delete(Results $result)
    {
        $result->delete();
        return redirect(route('result.index'))->with('success', 'result delete successfully');
    }
}
