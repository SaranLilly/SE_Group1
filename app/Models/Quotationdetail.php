<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotationdetail extends Model
{
    use HasFactory;
    protected $table = 'quotationdetail';
    protected $primaryKey = 'quotationdetailID';
    protected $fillable = [
        'productvarityID',
        'quotationID',
    ];
    public $timestamps = false;
}