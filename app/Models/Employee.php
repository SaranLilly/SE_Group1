<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primaryKey = 'empID';

    protected $fillable = [
        'prefix',
        'firstName',
        'lastName',
        'nickname',
        'userName',
        'password',
        'phoneNumber',
        'idCard',
        'birth',
        'email',
        'positionName',
        'saleTeamID',
    ];
    public $timestamps = false; // ปิดการใช้งานคอลัมน์ 'created_at' และ 'updated_at'
}
