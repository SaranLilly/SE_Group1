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
        $results = DB::table('results')
            ->join('criteriakpi', 'criteriakpi.crID', '=', 'results.idcriterakipi')
            ->get();
        return view('result.index', ['results' => $results]);
    }
    public function create()
    {
        $evaluations = Evalution::all();
        $criteriakpis = DB::table('criteriakpi')->get();
        return view('result.create', ['criteriakpis' => $criteriakpis, 'evaluations' => $evaluations]);
    }
    public function store(Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'idcriterakipi' => 'required',
            'idevalution' => 'required',
            'weight' => 'required',
            'score' => 'required',
        ]);
        //dd($data);
        Results::create($data);

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
