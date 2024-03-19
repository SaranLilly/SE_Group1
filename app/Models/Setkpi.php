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
        $setkpis = DB::table('setkpi')->get();
        return $setkpis;
    }
    public static function getID(Request $request){
        $setkpis = DB::table('setkpi')->get();

        return $setkpis;
    }
    public static function add(Request $request){
        DB::insert('insert into setkpi(
            idset,titleset
            ) values (?,?)' ,[
                NULL,
                $request->titleset
            ]);
    }
    public static function sdelete(Request $request){
        DB::delete('delete from setkpi where idset = ?',
        [$request->idset]);
    }
    public static function supdate(Request $request){
        $title=$request->titleset;
        dd($title);
        DB::update(
            'update setkpi set titleset = {{$title}} where idset = ?',
            [$request->id]);

           // UPDATE `setkpis` SET `titleset` = 'ssssssa' WHERE `setkpis`.`idset` = 3;
    }
}
