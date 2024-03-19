<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setkpi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SetkpiController extends Controller
{
    public function index(){

        $setkpis = DB::table('setkpi')->get();
        return view('setkpi.index', ['setkpis' => $setkpis]);

    }
    public function create(){
        return view('setkpi.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'titleset' => 'required|max:20',

        ]);
        Setkpi::create($data);

        return redirect(route('setkpi.index'));
    }
    public function edit(Setkpi $setkpi){

        return view('setkpi.update', ['setkpi' => $setkpi]);
    }
    public function update(Setkpi $setkpi, Request $request){
        $data = $request->validate([
            'titleset' => 'required|max:20',
        ]);

        $setkpi->update($data);

        return redirect(route('setkpi.index'))->with('success', 'setkpi updated successfully');
    }

    public function delete(Setkpi $setkpi){
        $setkpi->delete();
        return redirect(route('setkpi.index'))->with('success', 'setkpi delete successfully');
}
}