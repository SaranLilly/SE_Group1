<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Setkpi extends Model
{
    use HasFactory;
    //public $timestamps = false;
    public static function getAllsetkpi(){
        $setkpis = DB::table('setkpi')->get();
        return $setkpis;
    }
    public static function addsetkpi(Request $request){
        DB::insert('insert into setkpi(
            idset,titleset
            ) values (?,?)' ,[
                NULL,
                $request->titleset
            ]);
    }
    public static function deletesetkpi(Request $request){
        DB::delete('delete from setkpi where idset = ?',
        [$request->idset]);
    }
    public static function updatesetkpi(Request $request){
        //$title=$request->titleset;
        //$title=$request->titleset;
        //dd($title);
        DB::update(
            'update setkpi set titleset = ? where idset = ?',
            [$request->titleset,$request->id]);

           // UPDATE `setkpis` SET `titleset` = 'ssssssa' WHERE `setkpis`.`idset` = 3;
    }
}
