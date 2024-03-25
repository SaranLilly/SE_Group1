<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\productvarity;



class productvarityController extends Controller
{
    public function index(){
        $productvarity = DB::table('productvarity')
        ->join('products', 'products.productsID', '=', 'productvarity.productID')     
        ->get();

        return view('productvarity.index', ['productvarity' => $productvarity]);
    }
    public function create(){
        $productvarity = DB::table('productvarity')->get();
        $products= DB::table('products')->get();
        return view('productvarity.create', ['productvarity' => $productvarity,'products'=>$products]);
    }
    public function listofproductvarity(Request $request)
    {
       // dd($request);
        $data = $request->validate([
            'productID' => 'required|Integer',
            'amount' => 'required|Integer',
            'color' => 'required|String',
            'price' => 'required',
        ]); 
        //dd($dd);
        $newproductvarity = productvarity::create($data);

        return redirect(route('productvarity.index')); 
    }
    public function edit(productvarity $productvarity){
        //$productvarity = DB::table('productvarity')->get();
        $products= DB::table('products')->get();
        return view('productvarity.edit', ['productvarity' => $productvarity,'products'=>$products]);
    }
    public function update(productvarity $productvarity, Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'productID' => 'required|Integer',
            'amount' => 'required|Integer',
            'color' => 'required|String',
            'price' => 'required',
        ]);
        //dd($data);
        
        $productvarity->update($data);
        return redirect(route('productvarity.index'))->with('success', 'productvarity productvarity successfully'); 

    }

    public function destroy(productvarity $productvarity){
        $productvarity->delete();
        return redirect(route('productvarity.index'))->with('success', 'productvarity delete successfully');
    }

}