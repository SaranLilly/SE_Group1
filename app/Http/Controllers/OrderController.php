<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Order;


class OrderController extends Controller
{
    public function index(){
        $orders = DB::table('orders')
        ->join('employee', 'employee.empID', '=', 'orders.empID')     
        ->join('customers', 'customers.cusId', '=', 'orders.customerID') 
        ->join('status', 'status.statusid', '=', 'orders.statusid')          
        ->get();

        return view('orders.index', ['orders' => $orders]);
    }
    public function create(){
        $orders=DB::table('orders')->get();
        $employees= Employee::all();
        $customers=DB::table('customers')->get();
        $status=DB::table('status')->get();
        return view('orders.create', ['orders' => $orders,'customers'=>$customers,'employee'=>$employees,'status'=>$status]);
    }
    public function listoforders(Request $request)
    {
       // dd($request);
        $data = $request->validate([
            'empID' => 'required|Integer',
            'customerID' => 'required|Integer',
            'statusid' => 'required|Integer',
        ]); 
        //dd($dd);
        $newOrders = Order::create($data);

        return redirect(route('orders.index')); 
    }
    public function edit(Order $orders){
        //$orders=DB::table('orders')->get();
        $employees= Employee::all();
        $customers=DB::table('customers')->get();
        $status=DB::table('status')->get();
        return view('orders.edit', ['orders' => $orders,'customers'=>$customers,'employee'=>$employees,'status'=>$status]);
    }
    public function update(Order $orders, Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'empID' => 'required|Integer',
            'customerID' => 'required|Integer',
            'statusid' => 'required|Integer',
        ]);
        //dd($data);
        
        $orders->update($data);
        return redirect(route('orders.index'))->with('success', 'Order update successfully'); 

    }

    public function destroy(Order $orders){
        $orders->delete();
        return redirect(route('orders.index'))->with('success', 'Order delete successfully');
    }
    
}


