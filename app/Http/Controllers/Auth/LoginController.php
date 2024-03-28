<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use NunoMaduro\Collision\Provider;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    public $employee_log1;
    /* public static function get(){
        $a=$employee_log1;
        return $a;
    } */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //$this->employee_log1 = Employee::all();
       
        
    }
    public function login(Request $request)
    {
        $employee_log = DB::select('SELECT * FROM `employee` WHERE employee.email = ? and employee.password = ?',[$request->email,$request->password]);
        
        if($employee_log != null){
            $this->employee_log1=$employee_log;
            View::share('employee_log1',$this->employee_log1);
            
            //$employee = Auth::user();
            //$employeeFirstName = Auth::user()->employee->firstName;
            //dd($employee_log);
            return view('/welcome');
        }
        return Redirect::to("/login")->withFail('อีเมลหรือรหัสผ่านที่ป้อนมาไม่มีในระบบ กรุณากรอกใหม่');
        
    }
}
