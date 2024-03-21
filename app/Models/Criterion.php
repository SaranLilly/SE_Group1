<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterion extends Model
{
    use HasFactory;
    protected $table = 'criterion';
    protected $primaryKey = 'idcriterion';

    protected $fillable = [
        'idcriteriakpi',
        'max',
        'min',
        'score',
        'levelOfQuality',
    ];
    public $timestamps = false; // ปิดการใช้งานคอลัมน์ 'created_at' และ 'updated_at'
}
