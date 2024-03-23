<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Quotation;


class quotationController extends Controller
{
    public function index(){
        $quotation = DB::table('quotation')
        ->join('employee', 'employee.empID', '=', 'quotation.empID')     
        ->join('customers', 'customers.cusId', '=', 'quotation.customerID')    
        ->get();

        return view('quotation.index', ['quotation' => $quotation]);
    }
    public function create(){
        $quotation=DB::table('quotation')->get();
        $employees= Employee::all();
        $customers=DB::table('customers')->get();
        return view('quotation.create', ['quotation' => $quotation,'customers'=>$customers,'employee'=>$employees]);
    }
    public function listofquotation(Request $request)
    {
       // dd($request);
        $data = $request->validate([
            'date' => 'required',
            'empID' => 'required|Integer',
            'customerID' => 'required|Integer',
        ]); 
        //dd($dd);
        $newQuotation = Quotation::create($data);

        return redirect(route('quotation.index')); 
    }
    public function edit(Quotation $quotation){
        $employees= Employee::all();
        $customers=DB::table('customers')->get();
        return view('quotation.edit', ['quotation' => $quotation,'customers'=>$customers,'employee'=>$employees]);
    }
    public function update(quotation $quotation, Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'date' => 'required',
            'empID' => 'required|Integer',
            'customerID' => 'required|Integer',
        ]);
        //dd($data);
        
        $quotation->update($data);
        return redirect(route('quotation.index'))->with('success', 'Quotation update successfully'); 

    }

    public function destroy(quotation $quotation){
        $quotation->delete();
        return redirect(route('quotation.index'))->with('success', 'Quotation delete successfully');
    }
    
}