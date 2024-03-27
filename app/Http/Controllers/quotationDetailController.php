<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quotation;
use App\Models\Quotationdetail;



class quotationDetailController extends Controller
{
    public function index(){
        $quotationdetail = DB::table('quotationdetail')
        ->join('quotation', 'quotation.quotationID', '=', 'quotationdetail.quotationID')
        ->join('employee', 'employee.empID', '=', 'quotation.empID')     
        ->join('customers', 'customers.cusId', '=', 'quotation.customerID') 
        ->join('productvarity', 'productvarity.productvarityID', '=', 'quotationdetail.productvarityID')
        ->join('products', 'products.productsID', '=', 'productvarity.productID')   
        ->get();

        return view('quotationdetail.index', ['quotationdetail' => $quotationdetail]);
    }
    public function create(){
        $quotationdetail=DB::table('quotationdetail')->get();
        $quotation= Quotationdetail::all();
        $productvarity=DB::table('productvarity')->get();
        return view('quotationdetail.create', ['quotationdetail' => $quotationdetail,'quotation' => $quotation,'productvarity'=>$productvarity]);
    }
    public function listofquotationdetail(Request $request)
    {
      // dd($request);
        $data = $request->validate([
            'productvarityID' => 'required|Integer',
            'quotationID' => 'required|Integer',
        ]); 
        //dd($dd);
        $newQuotationdetail = Quotationdetail::create($data);

        return redirect(route('quotationdetail.index')); 
    }
    public function edit(Quotationdetail $quotationdetail){
        $quotation= Quotationdetail::all();
        $productvarity=DB::table('productvarity')->get();
        return view('quotationdetail.edit', ['quotationdetail' => $quotationdetail,'quotation' => $quotation,'productvarity'=>$productvarity]);
    }
    public function update(Quotationdetail $quotationdetail, Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'productvarityID' => 'required|Integer',
            'quotationID' => 'required|Integer',
        ]);
        //dd($data);
        
        $quotationdetail->update($data);
        return redirect(route('quotationdetail.index'))->with('success', 'Quotationdetail update successfully'); 

    }

    public function destroy(Quotationdetail $quotationdetail){
        $quotationdetail->delete();
        return redirect(route('quotationdetail.index'))->with('success', 'Quotationdetail delete successfully');
    }
    
}