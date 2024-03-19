<?php

namespace App\Http\Controllers;

use App\Models\Selectionkpi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SelectionkpiController extends Controller
{
    public function index(){
        $selectionkpis = DB::table('selectionkpi')
        ->join('setkpi', 'setkpi.idset', '=', 'selectionkpi.idset')
        ->join('criteriakpi', 'criteriakpi.crID', '=', 'selectionkpi.idcriteriakpi')
        ->select('selectionkpi.*', 'setkpi.titleset', 'criteriakpi.title')                  
        ->get();
        return view('selectionkpi.index', ['selectionkpis' => $selectionkpis]);
    }
    public function create(){
        return view('selectionkpi.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'idset' => 'required',
            'idcriteriakpi' => 'required',

        ]);

        Selectionkpi::create($data);

        return redirect(route('selectionkpi.index'));
    }
    public function edit(Selectionkpi $selectionkpi){

        return view('selectionkpi.update', ['selectionkpi' => $selectionkpi]);
    }
    public function update(Selectionkpi $selectionkpi, Request $request){
        $data = $request->validate([
            'idset' => 'required',
            'idcriteriakpi' => 'required',
        ]);

        $selectionkpi->update($data);

        return redirect(route('selectionkpi.index'))->with('success', 'selectionkpi updated successfully');
    }

    public function delete(Selectionkpi $selectionkpi){
        $selectionkpi->delete();
        return redirect(route('selectionkpi.index'))->with('success', 'selectionkpi delete successfully');
    }
    //
}
