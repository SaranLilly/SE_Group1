<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Setkpi extends Model
{
    protected $table = 'setkpi';
    protected $primaryKey = 'idset';
    protected $fillable = [
        'titleset',

    ];
    public $timestamps = false;
}
