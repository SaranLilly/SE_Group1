<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = employee::all();
        $employees = DB::table('employee')
            ->leftJoin('saleteam', 'saleteam.saleTeamID', '=', 'employee.saleTeamID')
            ->leftJoin('position', 'position.positionID', '=', 'employee.positionID')
            ->select('employee.*', 'position.positionName', 'saleteam.teamName')
            ->get();
        return view('employee.index', ['employees' => $employees]);

    }
    public function create()
    {
        return view('employee.create');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'userName' => 'required|max:20',
            'prefix' => 'required|string',
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'nickname' => 'required|string',
            'password' => 'required|string|min:6',
            'phoneNumber' => 'required|string',
            'idCard' => 'required|string',
            'birth' => 'required|date',
            'email' => 'required|email',
            'positionID' => 'required|integer',
            'saleTeamID' => 'required|integer',
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'));
    }
    public function edit(Employee $employee)
    {
        // dd($employee);
        return view('employee.edit', ['employee' => $employee]);
    }
    public function update(Employee $employee, Request $request)
    {
        $data = $request->validate([
            'userName' => 'required|max:20',
            'prefix' => 'required|string',
            'firstName' => 'required|string|max:20',
            'lastName' => 'required|string|max:20',
            'nickname' => 'required|string',
            'password' => 'required|string|min:6',
            'phoneNumber' => 'required|string',
            'idCard' => 'required|string',
            'birth' => 'required|date',
            'email' => 'required|email',
            'positionID' => 'required|integer',
            'saleTeamID' => 'required|integer',
        ]);
        $employee->update($data);
        return redirect(route('employee.index'))->with('success', 'Employee update successfully');

    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect(route('employee.index'))->with('success', 'Employee delete successfully');
    }
}
