<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selectionkpi extends Model
{
    use HasFactory;
    protected $table = 'selectionkpi';
    protected $primaryKey = 'idselection';
    protected $fillable = [
        'idset',
        'idcriteriakpi'
    ];
    public $timestamps = false;
}
