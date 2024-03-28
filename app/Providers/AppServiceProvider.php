<?php

namespace App\Providers;

use App\Http\Controllers\Auth\LoginController;
use App\Models\Employee;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        $employee_log1 = "sssss"; // กำหนดค่าตัวแปรตามที่ต้องการ

        // แชร์ตัวแปรให้ใช้งานได้ทั่วทั้งโปรเจค
        View::share('employee_log1', $employee_log1);
        
    }

}
