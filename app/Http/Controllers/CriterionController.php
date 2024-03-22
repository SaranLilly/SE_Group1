<?php

namespace App\Http\Controllers;

use App\Models\Criteriakpi;
use App\Models\Criterion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriterionController extends Controller
{
    public function index()
    {
        $criterions = DB::table('criterion')
            ->leftJoin('criteriakpi', 'criteriakpi.crID', '=', 'criterion.idcriteriakpi')
            ->select('criterion.*', 'criteriakpi.title')
            ->get();
        return view('criterion.index', ['criterions' => $criterions]);

    }
    public function create()
    {
        return view('criterion.create');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([

            'idcriteriakpi' => 'required|max:20',
            'max' => 'required|max:20',
            'min' => 'required|max:20',
            'score' => 'required|max:20',
            'levelOfQuality' => 'required|max:20',
        ]);

        $newCriterion = Criterion::create($data);

        return redirect(route('criterion.index'));
    }
    // public function edit(Criterion $criterion)
    // {

    //     return view('criterion.edit', ['criterion' => $criterion]);
    // }
    public function edit($id)
    {
        $criterion = Criterion::findOrFail($id);
        $criteriakpis = Criteriakpi::where('crID', $criterion->idcriteriakpi)->get();
        //dd($criteriakpis);
        return view('criterion.edit', ['criterion' => $criterion, 'criteriakpis' => $criteriakpis]);
    }

    public function update(Criterion $criterion, Request $request)
    {
        $data = $request->validate([
            'idcriteriakpi' => 'required|max:20',
            'max' => 'required|max:20',
            'min' => 'required|max:20',
            'score' => 'required|max:20',
            'levelOfQuality' => 'required|max:20',
        ]);

        $criterion->update($data);

        return redirect(route('criterion.index'))->with('success', 'criterion updated successfully');
    }

    public function destroy(Criterion $criterion)
    {
        $criterion->delete();
        return redirect(route('criterion.index'))->with('success', 'criterion delete successfully');
    }
}
