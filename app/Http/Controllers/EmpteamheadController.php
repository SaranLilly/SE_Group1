<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EmpteamheadController extends Controller
{
    public function index()
    {
        $employees = DB::table('employee')
            ->leftJoin('saleteam', 'saleteam.saleTeamID', '=', 'employee.saleTeamID')
            ->leftJoin('position', 'position.positionID', '=', 'employee.positionID')
            ->whereNotIn('position.positionID', [1, 4]) // เพิ่มเงื่อนไขที่ไม่เอา positionID เท่ากับ 1 หรือ 4
            ->select('employee.*', 'position.positionName', 'saleteam.teamName')
            ->get();
        return view('empteamhead.index', ['employees' => $employees]); // แก้จาก 'employee.index' เป็น 'empteamhead.index'

    }
}
