<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orderdetail;
use App\Models\Employee;
use App\Models\Order;


class OrderdetailController extends Controller
{
    public function index(){
        $orderdetail = DB::table('orderdetail')
        ->join('orders', 'orders.orderID', '=', 'orderdetail.orderID')
        ->join('status', 'status.statusid', '=', 'orders.statusid')       
        ->join('employee', 'employee.empID', '=', 'orders.empID')
        ->join('customers', 'customers.cusId', '=', 'orders.customerID')
        ->join('productvarity', 'productvarity.productvarityID','=', 'orderdetail.productvarity')
        ->join('products', 'products.productsID', '=', 'productvarity.productID')   
        ->get();

        return view('orderdetail.index', ['orderdetail' => $orderdetail]);
    }
    public function create(){
        $orderdetail=DB::table('orderdetail')->get();
        $orders= Order::all();
        $employee=Employee::all();
        $productvarity=DB::table('productvarity')->get();
        return view('orderdetail.create', ['orderdetail' => $orderdetail,'employee'=>$employee,'orders'=>$orders,'productvarity'=>$productvarity]);
    }
    public function listoforderdetail(Request $request)
    {
      // dd($request);
        $data = $request->validate([
            'productvarity' => 'required|Integer',
            'orderID' => 'required|Integer',
        ]); 
        //dd($dd);
        $newOrderdetail = Orderdetail::create($data);

        return redirect(route('orderdetail.index')); 
    }
    public function edit(Orderdetail $orderdetail){
        //$orderdetail=DB::table('orderdetail')->get();
        $orders= Order::all();
        $employee=Employee::all();
        $productvarity=DB::table('productvarity')->get();
        return view('orderdetail.edit', ['orderdetail' => $orderdetail,'orders'=>$orders,'productvarity'=>$productvarity,'employee'=>$employee]);
    }
    public function update(Orderdetail $orderdetail, Request $request)
    {
        //dd($request);
        $data = $request->validate([
            'productvarity' => 'required|Integer',
            'orderID' => 'required|Integer',
        ]);
        //dd($data);
        
        $orderdetail->update($data);
        return redirect(route('orderdetail.index'))->with('success', 'Orderdetail update successfully'); 

    }

    public function destroy(Orderdetail $orderdetail){
        $orderdetail->delete();
        return redirect(route('orderdetail.index'))->with('success', 'Orderdetail delete successfully');
    }
    
}

