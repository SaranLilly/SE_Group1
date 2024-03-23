<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $table = 'quotation';
    protected $primaryKey = 'quotationID';
    protected $fillable = [
        'date',
        'empID',
        'customerID',
    ];
    public $timestamps = false;
}