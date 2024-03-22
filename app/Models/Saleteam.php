<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleteam extends Model
{
    use HasFactory;
    protected $table = 'saleteam';
    protected $primaryKey = 'saleTeamID';
    protected $fillable = [
        'teamName',

    ];
    public $timestamps = false; // ปิดการใช้งานคอลัมน์ 'created_at' และ 'updated_at'
}
