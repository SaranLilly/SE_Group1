<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function index(){
        $rounds=Round::getAllround();
        return view('Round.index',['rounds'=>$rounds]);
    }
    public function create(){
        return view('Round.create');
    }
    public function store(Request $request){
        //dd($request->titleset);
        /*
        DB::insert('insert into setkpis(
            idset,titleset
            ) values (?,?)' ,[
                NULL,
                $request->titleset
            ]);*/
        /*$data = $request->Validated([
            'titleset'=>'request'
        ]);
        $a=Setkpi::create($data);*/
       // Setkpi('Setkpi.index');
       Round::addround($request);

        return redirect(route('Round.index'));
        
    }
    public function delete(Request $request){
        //dd($request->idset);
        Round::deleteround($request);
        return redirect(route('Round.index'));
    }
    public function edit(Request $request){
        $idround = $request;
        
        //return view('Setkpi.update');
        //$setid = $request->setkpi;
        //dd($request->setkpi);
        return view('Round.update',['idround'=>$idround]);
    }
    public function update(Request $request){
        //dd($request);

        Round::updateround($request);
        //return redirect(route('Setkpi.index'));
        //Setkpi::setdelete($request);
        return redirect(route('Round.index'));
    }
}
