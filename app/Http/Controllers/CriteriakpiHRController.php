<?php

namespace App\Http\Controllers;

use App\Models\Criteriakpi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CriteriakpiHRController extends Controller
{
    public function index()
    {
        $criteriakpis = DB::table('criteriakpi')->get();
        return view('HRPages.topicEvaluationFormHRPage', ['criteriakpis' => $criteriakpis]);
    }
    public function create()
    {
        return view('HRPages.addtopicEvaluationFormHRPage');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:20',

        ]);

        $newCriteriakpi = Criteriakpi::create($data);

        return redirect(route('criteriakpiHR.index'));
    }
    public function edit(Criteriakpi $criteriakpi)
    {

        return view('HRPages.edittopicEvaluationFormHRPage', ['criteriakpi' => $criteriakpi]);
    }
    public function update(Criteriakpi $criteriakpi, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:20',
        ]);

        $criteriakpi->update($data);

        return redirect(route('criteriakpiHR.index'))->with('success', 'criteriakpi updated successfully');
    }

    public function destroy(Criteriakpi $criteriakpi)
    {
        $criteriakpi->delete();
        return redirect(route('criteriakpiHR.index'))->with('success', 'criteriakpi delete successfully');
    }
}
