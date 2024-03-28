<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setkpi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SetKpiHRController extends Controller
{
    public function index(){

        $setkpis = DB::table('setkpi')->get();
        return view('HRPages.setKpiEvaluationFormHRPage', ['setkpis' => $setkpis]);

    }
    public function create(){
        return view('HRPages.addsetKpiEvaluationFormHRPage');
    }
    public function store(Request $request){
        $data = $request->validate([
            'titleset' => 'required|max:20',

        ]);
        Setkpi::create($data);

        return redirect(route('setkpiHR.index'));
    }
    public function edit(Setkpi $setkpi){

        return view('HRPages.updatesetKpiEvaluationFormHRPage', ['setkpi' => $setkpi]);
    }
    public function update(Setkpi $setkpi, Request $request){
        $data = $request->validate([
            'titleset' => 'required|max:20',
        ]);

        $setkpi->update($data);

        return redirect(route('setkpiHR.index'))->with('success', 'setkpi updated successfully');
    }

    public function delete(Setkpi $setkpi){
        $setkpi->delete();
        return redirect(route('setkpiHR.index'))->with('success', 'setkpi delete successfully');
}
}