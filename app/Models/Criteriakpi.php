<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteriakpi extends Model
{
    use HasFactory;
    protected $table = 'criteriakpi';
    protected $primaryKey = 'crID';
    protected $fillable = [
        'title',

    ];
    public $timestamps = false; // ปิดการใช้งานคอลัมน์ 'created_at' และ 'updated_at'
}
