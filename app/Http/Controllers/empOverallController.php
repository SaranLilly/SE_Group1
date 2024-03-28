<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class empOverallController extends Controller
{
    function index(int $empID) {
        $quotationdetail = DB::table('quotationdetail')
            ->join('quotation', 'quotation.quotationID', '=', 'quotationdetail.quotationID')
            ->join('employee', 'employee.empID', '=', 'quotation.empID')     
            ->join('customers', 'customers.cusId', '=', 'quotation.customerID') 
            ->join('productvarity', 'productvarity.productvarityID', '=', 'quotationdetail.productvarityID')
            ->join('products', 'products.productsID', '=', 'productvarity.productID')   
            ->where('employee.empID', '=', $empID)   
            ->get();
    
        $orderdetail = DB::table('orderdetail')
            ->join('orders', 'orders.orderID', '=', 'orderdetail.orderID')
            ->join('status', 'status.statusid', '=', 'orders.statusid')       
            ->join('employee', 'employee.empID', '=', 'orders.empID')
            ->join('customers', 'customers.cusId', '=', 'orders.customerID')
            ->join('productvarity', 'productvarity.productvarityID','=', 'orderdetail.productvarity')
            ->join('products', 'products.productsID', '=', 'productvarity.productID')
            ->where('employee.empID', '=', $empID)   
            ->get();
    
            $feedbacks = DB::table('feedback')
            ->select('feedback.feedbackId', 'feedback.feedbackId', 'feedback.orderId', 'feedbacktitle.title', 'feedback.score', 'employee.userName', 'employee.firstName', 'employee.lastName', 'saleteam.teamName')
            ->leftJoin('feedbacktitle', 'feedback.feedbacktitleId', '=', 'feedbacktitle.feedbacktitleId')
            ->leftJoin('orders', 'orders.orderID', '=', 'feedback.orderId')
            ->leftJoin('employee', 'employee.empID', '=', 'orders.empID')
            ->leftJoin('saleteam', 'saleteam.saleTeamID', '=', 'employee.saleTeamID')
            ->where('employee.empID', '=', $empID)
            ->get();

        return view('empOverall.index', ['quotationdetail' => $quotationdetail, 'orderdetail' => $orderdetail, 'feedbacks' => $feedbacks]);
    }
    
}
