<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';
    protected $primaryKey = 'feedbackId';

    protected $fillable = [
        'feedbackId',
        'feedbacktitleId',
        'orderId',
        'score',

    ];
    public $timestamps = false; // ปิดการใช้งานคอลัมน์ 'created_at' และ 'updated_at'
}
