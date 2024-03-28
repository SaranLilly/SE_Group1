<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Round extends Model
{
    use HasFactory;
    protected $table = 'round';
    protected $primaryKey = 'idround';
    protected $fillable = [
        'date'
    ];
    public $timestamps = false;
}
