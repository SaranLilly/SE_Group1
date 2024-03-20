<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    protected $table = 'results';
    protected $primaryKey = 'resultsId';
    protected $fillable = [
        'idcriterakipi',
        'idevalution',
        'weight',
        'score'
    ];
    public $timestamps = false;
}
