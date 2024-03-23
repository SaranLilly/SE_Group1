<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    protected $primaryKey = 'orderdetailID';
    protected $fillable = [
        'productvarity',
        'orderID',
    ];
    public $timestamps = false;
}
