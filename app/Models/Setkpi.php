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
    public static function getAll(){
        $setkpis = DB::table('setkpis')->get();
        return $setkpis;
    }
    public static function getID(Request $request){
        $setkpis = DB::table('setkpis')->get();

        return $setkpis;
    }
    public static function add(Request $request){
        DB::insert('insert into setkpis(
            idset,titleset
            ) values (?,?)' ,[
                NULL,
                $request->titleset
            ]);
    }
    public static function sdelete(Request $request){
        DB::delete('delete from setkpis where idset = ?',
        [$request->idset]);
    }
    public static function supdate(Request $request){
        $id=$request->titleset;
        DB::update(
            'update setkpis set titleset = "00" where idset = ?',
            [$request->id]);

           // UPDATE `setkpis` SET `titleset` = 'ssssssa' WHERE `setkpis`.`idset` = 3;
    }
}
