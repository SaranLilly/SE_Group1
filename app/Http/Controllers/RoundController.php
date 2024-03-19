<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Round;

class RoundController extends Controller
{
    public function index(){
        $rounds = DB::table('round')->get();
        return view('round.index', ['rounds' => $rounds]);
    }
    public function create(){
        return view('round.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'date' => 'required|max:20',

        ]);

        Round::create($data);

        return redirect(route('round.index'));
    }
    public function edit(Round $round){

        return view('round.update', ['round' => $round]);
    }
    public function update(Round $round, Request $request){
        $data = $request->validate([
            'date' => 'required',
        ]);

        $round->update($data);

        return redirect(route('round.index'))->with('success', 'round updated successfully');
    }

    public function delete(Round $round){
        $round->delete();
        return redirect(route('round.index'))->with('success', 'round delete successfully');
    }
    
}
