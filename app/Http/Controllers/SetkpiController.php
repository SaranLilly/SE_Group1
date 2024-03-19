<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setkpi;
use Illuminate\Database\Eloquent\Model;

class SetkpiController extends Controller
{
    public function index(){
        $setkpis=Setkpi::getAllsetkpi();
        return view('Setkpi.index',['setkpis'=>$setkpis]);
    }
    public function create(){
        return view('Setkpi.create');
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
       Setkpi::addsetkpi($request);

        return redirect(route('Setkpi.index'));
        
    }
    public function delete(Request $request){
        //dd($request->idset);
        Setkpi::deletesetkpi($request);
        return redirect(route('Setkpi.index'));
    }
    public function edit(Request $request){
        $setid = $request;
        
        //return view('Setkpi.update');
        //$setid = $request->setkpi;
        //dd($request->setkpi);
        return view('Setkpi.update',['setid'=>$setid]);
    }
    public function update(Request $request){
        //dd($request);

        Setkpi::updatesetkpi($request);
        //return redirect(route('Setkpi.index'));
        //Setkpi::setdelete($request);
        return redirect(route('Setkpi.index'));
    }
}
