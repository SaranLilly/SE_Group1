<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Position;
use App\Models\Saleteam;
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
        // return view('employee.create');
        $employees = Employee::all(); // เพิ่มบรรทัดนี้เพื่อดึงข้อมูลพนักงานทั้งหมด
        $positions = Position::all();
        $saleteams = Saleteam::all();
        return view('employee.create', ['employees' => $employees, 'positions' => $positions, 'saleteams' => $saleteams]); // ส่งตัวแปร $employees ไปยัง View
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
            'positionID' => 'required|Integer',
            'saleTeamID' => 'required|Integer',
        ]);

        $newEmployee = Employee::create($data);

        return redirect(route('employee.index'));
    }
    // public function edit(Employee $employee, Position $positions, Saleteam $saleteams)
    // {
    //     // dd($employee);
    //     return view('employee.edit', ['employee' => $employee, 'positions' => $positions, 'saleteams' => $saleteams]);
    // }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $positions = Position::where('positionID', $employee->positionID)->get();
        $saleteams = Saleteam::where('saleTeamID', $employee->saleTeamID)->get();
        return view('employee.edit', ['employee' => $employee, 'positions' => $positions, 'saleteams' => $saleteams]);
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
            'positionID' => 'required|Integer',
            'saleTeamID' => 'required|Integer',
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
