<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productvarity extends Model
{
    use HasFactory;
    protected $table = 'productvarity';
    protected $primaryKey = 'productvarityID';
    protected $fillable = [
        'productID',
        'amount',
        'color',
        'price',
    ];
    public $timestamps = false;
}
